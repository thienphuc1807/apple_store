<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::insert('insert into categories (name) values (?)', ['iPhone']);
        // DB::insert('insert into categories (name) values (?)', ['iPad']);
        // DB::insert('insert into categories (name) values (?)', ['Mac']);
        // DB::insert('insert into categories (name) values (?)', ['Watch']);
        // DB::table("categories")->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'iPhone',
                'slug' => 'iphone',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPad',
                'slug' => 'ipad',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mac',
                'slug' => 'mac',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Watch',
                'slug' => 'watch',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
