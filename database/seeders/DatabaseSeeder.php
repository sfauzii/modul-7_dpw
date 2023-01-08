<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'title_category' => 'Pendidikan',
            'slug_category' => 'Pendidikan',
        ]);
        Post::create([
            'category_id' => 1,
            'title' => 'Judul Berita 1',
            'slug' => str_replace(' ','-','Judul Berita 1'),
            'post' => '<p>isi berita</p>',
        ]);

    }
}
