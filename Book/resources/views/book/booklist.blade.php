@extends('book.layout')
@section('title', 'Book List')
@section('content')
    <div class="card-header">
        <h3>Book List</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            <a href="{{ route('categories.show', $book->getCategory->id) }}">
                                {{ $book->getCategory->name }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection