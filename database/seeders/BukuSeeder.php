<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'title' => 'Belajar Laravel',
                'pengarang' => 'John Doe',
                'tahun_terbit' => 2020,
                "updated_at" => now(),
                "created_at" => now(),
            ],
            [
                'title' => 'Belajar PHP',
                'pengarang' => 'Jane Doe',
                'tahun_terbit' => 2021,
                "updated_at" => now(),
                "created_at" => now(),
            ],
            [
                'title' => 'Belajar JavaScript',
                'pengarang' => 'John Smith Yeah',
                'tahun_terbit' => 2019,
                "updated_at" => now(),
                "created_at" => now(),
            ],
            [
                'title' => 'Belajar Blockchain Dasar',
                'pengarang' => 'Muhammad Dausyaf Aryandha',
                'tahun_terbit' => 2027,
                "updated_at" => now(),
                "created_at" => now(),
            ]
        ];
        DB::table('book')->insert($buku);
    }
}