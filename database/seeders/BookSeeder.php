<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Belajar Laravel 12 & Vue 3',
                'author' => 'Ahmad Developer',
                'year' => 2026,
                'stock' => 15,
                'description' => 'Panduan lengkap membangun SPA modern.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pemrograman PHP Native',
                'author' => 'Budi Santoso',
                'year' => 2024,
                'stock' => 8,
                'description' => 'Membangun arsitektur backend yang bersih.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
