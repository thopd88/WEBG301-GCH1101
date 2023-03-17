<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('booklist', ['books' => $books]);
    }

    public function show($title)
    {
        $book = Book::find($title);
        return view('bookdetail', ['book' => $book]);
    }
    
}
