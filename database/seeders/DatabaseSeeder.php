<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 5 categories first
        $categories = Category::factory(5)->create();

        // Create 500 books and randomly assign them to the created categories
        Book::factory(500)->create([
            'category_id' => $categories->random()->id,
        ]);
    }
}

