<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return response()->json('deleted');
    }

    public function create(Request $request){
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->save();
        return response()->json($book);
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->save();
        return response()->json($book);
    }
}
