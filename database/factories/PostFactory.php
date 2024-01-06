<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Faker\Generator as Faker;
use GuzzleHttp\Client;


class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $imageResponse = Http::get('https://source.unsplash.com/800x600/?nature');

        if ($imageResponse->successful()) {
            $image = $imageResponse->json();

            // Pastikan struktur respons sesuai dengan yang diharapkan
            if (isset($image['urls']['regular'])) {
                $thumbnail = $image['urls']['regular'];
            } else {
                $thumbnail = null;
                report(new \Exception('Invalid API response structure: ' . json_encode($image)));
            }
        } else {
            $thumbnail = null;
            report(new \Exception('Failed to fetch image from API: ' . $imageResponse->status()));
        }

        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'thumbnail' => $thumbnail, // Pastikan variabel ini memiliki nilai yang valid
            'body' => $this->faker->paragraphs(5, true),
            'categoryId' => 1,
            'userId' => 1,
            'excerpt' => $this->faker->sentence,
        ];
    }
}
