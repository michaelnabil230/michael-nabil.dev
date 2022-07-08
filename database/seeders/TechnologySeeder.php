<?php

namespace Database\Seeders;

use App\Models\Enums\TechnologyType;
use App\Models\Technology;
use Illuminate\Database\Seeder;
use Throwable;

class TechnologySeeder extends Seeder
{
    protected function technologies(): array
    {
        return [
            // Frontend
            [
                'name' => 'Tailwind CSS',
                'type' => TechnologyType::frontend(),
                'website_url' => 'https://tailwindcss.com/',
                //'image_url' => 'https://pbs.twimg.com/profile_images/1278691829135876097/I4HKOLJw_400x400.png',
                'description' => 'A description why we use Tailwind',
            ],
            [
                'name' => 'Vite',
                'type' => TechnologyType::frontend(),
                'website_url' => 'https://vitejs.dev/',
                'image_url' => 'https://vitejs.dev/logo.svg',
                'description' => 'A description why we use Vite.js',
            ],
            [
                'name' => 'Typescript',
                'type' => TechnologyType::frontend(),
                'website_url' => 'https://www.typescriptlang.org/',
                'image_url' => 'https://vitejs.dev/logo.svg',
                'description' => 'A description why we use Typescript',
            ],

            // Backend
            [
                'name' => 'Laravel',
                'type' => TechnologyType::backend(),
                'website_url' => 'https://laravel.com/',
                'image_url' => 'https://laravel.com/img/logomark.min.svg',
                'description' => 'A description why we use Laravel',
            ],
        ];
    }

    public function run(): void
    {
        foreach ($this->technologies() as $data) {
            $imageUrl = $data['image_url'] ?? null;

            unset($data['image_url']);

            $technology = Technology::query()
                ->firstOrNew(['name' => $data['name']])
                ->fill($data);

            $technology->save();

            try {
                $technology
                    ->addMediaFromUrl($imageUrl)
                    ->toMediaCollection('avatar');
            } catch (Throwable $exception) {
            }
        }

        Technology::query()
            ->whereNotIn('name', array_column($this->technologies(), 'name'))
            ->delete();
    }
}
