<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'categoryName' => 'Cybersecurity',
            ],
            [
                'categoryName' => 'World',
            ],
            [
                'categoryName' => 'Business',
            ],
            [
                'categoryName' => 'Technology',
            ]
        ];

        DB::table('category')->insert($data);
    }
}
