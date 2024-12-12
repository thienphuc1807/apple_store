<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name' => 'iPhone 16 Pro Max',
                'slug' => 'iphone-16-pro-max',
                'colors' => json_encode(["#9c0505", "#000"]),
                'storage' => json_encode(["128GB", "256GB", "1TB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 16 Pro',
                'slug' => 'iphone-16-pro',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 15 Pro Max',
                'slug' => 'iphone-15-pro-max',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 15 Pro',
                'slug' => 'iphone-15-pro',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 14 Pro Max',
                'slug' => 'iphone-14-pro-max',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 14 Pro',
                'slug' => 'iphone-14-pro',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 13 Pro Max',
                'slug' => 'iphone-13-pro-max',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 13 Pro',
                'slug' => 'iphone-13-pro',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 1,
                'subcategories_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Gen 10 th 10.9 inch Cellular 64GB',
                'slug' => 'ipad-gen-10-th-10-9-inch-cellular-64gb',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Gen 10 th 10.9 inch WiFi 64GB',
                'slug' => 'ipad-gen-10-th-10-9-inch-wifi-64gb',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Air 6 M2 11 inch Wi-Fi',
                'slug' => 'ipad-air-6-m2-11-inch-wi-fi',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Air 6 M2 11 inch Wi-Fi + Cellular',
                'slug' => 'ipad-air-6-m2-11-inch-wi-fi-cellular',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Pro M4 11 inch Wi-Fi',
                'slug' => 'ipad-pro-m4-11-inch-wi-fi',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Pro M4 11 inch Wi-Fi + Cellular',
                'slug' => 'ipad-pro-M4-11-inch-wi-fi-cellular',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Mini 6',
                'slug' => 'ipad-mini-6',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad Mini 7',
                'slug' => 'ipad-mini-7',
                'colors' => json_encode(["#9c0505", "#FFF"]),
                'storage' => json_encode(["128GB", "256GB"]),
                'actual_price' => 20000000,
                'old_price' => 30000000,
                'stock' => 10,
                'categories_id' => 2,
                'subcategories_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
