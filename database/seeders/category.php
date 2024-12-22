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
                'name' => 'Cybersecurity',
            ],
            [
                'name' => 'World',
            ],
            [
                'name' => 'Technology',
            ]
        ];

        DB::table('category')->insert($data);
    }
}
