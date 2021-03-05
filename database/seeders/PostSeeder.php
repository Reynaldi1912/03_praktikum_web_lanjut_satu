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
                'nama' => 'MMarble Edu Games',
                'kelas' => 'https://www.educastudio.com/category/marbel-edu-games',
                'picture' => 'images/project/project-image01.jpg'
            ],
            [
                'nama' => 'Marble and friends kids Games',
                'kelas' => 'https://www.educastudio.com/category/marbel-and-friends-kids-games',
                'picture' => 'images/project/project-image02.jpg'
            ],
            [
                'nama' => 'Riri Story Books',
                'link' => 'https://www.educastudio.com/category/riri-story-books',
                'picture' => 'images/project/project-image03.jpg'
            ],
            [
                'nama' => 'Riri Story Books',
                'link' => 'https://www.educastudio.com/category/riri-story-books',
                'picture' =>'images/project/project-image04.jpg'
            ]
        ];
        DB::table('posts')->insert($posts);
    }
}
