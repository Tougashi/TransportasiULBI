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
        User::create([
            'email' => 'transportasiulbi@ac.id',
            'username' => 'admin',
            'password' => bcrypt('password'), //password
            'author' => 'Admin Transportasi Ulbi'
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
        Category::create([
            'category' => 'Dosen',
            'slug' => 'dosen'
        ]);
        Category::create([
            'category' => 'Review',
            'slug' => 'review'
        ]);
        Category::create([
            'category' => 'Kurikulum',
            'slug' => 'kurikulum'
        ]);
        Category::create([
            'category' => 'Himpunan',
            'slug' => 'himpunan'
        ]);
        Category::create([
            'category' => 'Anggota Himpunan',
            'slug' => 'anggota-himpunan'
        ]);

    }
}
