<?php

namespace Tests\Feature\Auth;

use App\Models\Admin;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $admin = Admin::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($admin)->get('/dashboard/verify-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified()
    {
        $admin = Admin::factory()->create([
            'email_verified_at' => null,
        ]);

        Event::fake();

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $admin->id, 'hash' => sha1($admin->email)]
        );

        $response = $this->actingAs($admin)->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($admin->fresh()->hasVerifiedEmail());
        $response->assertRedirectToSignedRoute('dashboard.welcome', ['verified' => '1']);
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $admin = Admin::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $admin->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($admin)->get($verificationUrl);

        $this->assertFalse($admin->fresh()->hasVerifiedEmail());
    }
}
