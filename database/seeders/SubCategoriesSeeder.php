<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            ['name' => 'iPhone 16 series', 'slug' => 'iphone-16-series', 'categories_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPhone 15 series', 'slug' => 'iphone-15-series', 'categories_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPhone 14 series', 'slug' => 'iphone-14-series', 'categories_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPhone 13 series', 'slug' => 'iphone-13-series', 'categories_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPad 10', 'slug' => 'ipad-10', 'categories_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPad Air M2', 'slug' => 'ipad-air-m2', 'categories_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPad Pro M4', 'slug' => 'ipad-pro-m4', 'categories_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPad Mini', 'slug' => 'ipad-mini', 'categories_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MacBook Pro M4', 'slug' => 'macbook-pro-m4', 'categories_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MacBook Air', 'slug' => 'macbook-air', 'categories_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iMac', 'slug' => 'imac', 'categories_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mac Mini', 'slug' => 'mac-mini', 'categories_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Watch Ultra 2', 'slug' => 'apple-watch-ultra-2', 'categories_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Watch Series 9', 'slug' => 'apple-watch-series-9', 'categories_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Watch SE', 'slug' => 'apple-watch-se', 'categories_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Watch Series 10', 'slug' => 'apple-watch-series-10', 'categories_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
