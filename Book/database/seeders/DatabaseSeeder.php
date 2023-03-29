<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create(['name' => 'Science Fiction']);
        $category2 = Category::create(['name' => 'Drama']);

        $book1 = Book::create([
            'title' => 'Dune',
            'author' => 'Frank Herbert',
            // 'category_id' => $category1->id,
        ]);
        $book1->categories()->attach($category1->id);

        $book2 = Book::create([
            'title' => 'Ender\'s Game',
            'author' => 'Orson Scott Card',
            // 'category_id' => $category->id,
        ]);
        $book2->categories()->attach($category1->id);
        $book2->categories()->attach($category2->id);
    }
}
