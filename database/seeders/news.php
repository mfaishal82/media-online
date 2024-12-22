<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class news extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                // 'id' => 1,
                'title' => 'Berita Pertama',
                'content' => '',
                'img' => '',
                'isHeadline' => 'True',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 'id' => 2, 
                'title' => 'Berita Kedua',
                'content' => '',
                'img' => '',
                'isHeadline' => 'False',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // 'id' => 3,
                'title' => 'Berita Ketiga',
                'content' => '',
                'img' => '',
                'isHeadline' => 'False',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('news')->insert($data);
    }
}