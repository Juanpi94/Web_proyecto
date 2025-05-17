<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' => "Breakfast"]);
        Category::create(['name' => "Drinks"]);
        Category::create(['name' => "Lunch"]);
        Category::create(['name' => "Desserts"]);
        Category::create(['name' => "Soups"]);
        Category::create(['name' => "Entrees"]);
    }
}
