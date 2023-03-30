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
        $category1 = Category::create([
            'name' => 'Science Fiction',
        ]);
        $book1 = Book::create([
            'title' => 'Dune',
            'author' => 'Frank Herbert',
            'category_id' => $category1->id,
            'description' => 'Dune is a 1965 science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny\'s This Immortal for the Hugo Award in 1966, and it won the inaugural Nebula Award for Best Novel. The novel is frequently cited as the best-selling science fiction novel ever published, selling over 20 million copies since its original publication. It is often cited as the best-selling science fiction novel of all time.',
        ]);
        
    }
}
