<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
            [
                'nama' => 'Marble and friends kids Games',
                'kelas' => 'https://www.educastudio.com/category/marbel-and-friends-kids-games'
            ],
            [
                'nama' => 'Riri Story Books',
                'link' => 'https://www.educastudio.com/category/riri-story-books'
            ],
            [
                'nama' => 'Riri Story Books',
                'link' => 'https://www.educastudio.com/category/riri-story-books'
            ]
        ];
        DB::table('posts')->insert($posts);
    }
}
