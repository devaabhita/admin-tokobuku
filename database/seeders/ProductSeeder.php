<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('products')->insert([
        [
            'name' => 'Atomic Habits',
            'slug' => Str::slug('Atomic Habits'),
            'description' => 'Buku tentang pembentukan kebiasaan yang baik',
            'category_id' => 3, // Pengembangan Diri
            'price' => 100000,
            'img' => 'products/atomic-habits.jpg',
            'stock' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
