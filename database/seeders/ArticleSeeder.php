<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Spatie\Sheets\Facades\Sheets;
use Throwable;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sheet = Sheets::collection('posts')->get('casting-json-columns-to-value-objects');

        $article = Article::create([
            'title' => [
                'ar' => 'Casting JSON Columns to Value Objects with Laravel',
                'en' => 'Casting JSON Columns to Value Objects with Laravel',
            ],
            'description' => [
                'ar' => 'Casting JSON Columns to Value Objects with Laravel',
                'en' => 'Casting JSON Columns to Value Objects with Laravel',
            ],
            'content' => [
                'ar' => $sheet->contents.'',
                'en' => $sheet->contents.'',
            ],
            'is_published' => true,
        ]);

        try {
            $article
                ->addMediaFromUrl('https://pbs.twimg.com/profile_images/1278691829135876097/I4HKOLJw_400x400.png')
                ->toMediaCollection('header');
        } catch (Throwable $exception) {
        }
    }
}
