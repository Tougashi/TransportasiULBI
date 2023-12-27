<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'email' => 'hthamrin@rahmawati.desa.id',
            'username' => 'admin',
            'password' => bcrypt('password'), //password
            'author' => 'Sadina Yuliana Hastuti'
        ]);

        Category::create([
            'category' => 'Berita',
            'slug' => 'berita'
        ]);
        Category::create([
            'category' => 'Kegiatan',
            'slug' => 'kegiatan'
        ]);
        Category::create([
            'category' => 'Event',
            'slug' => 'event'
        ]);
        Category::create([
            'category' => 'Pengumuman',
            'slug' => 'pengumuman'
        ]);

    }
}
