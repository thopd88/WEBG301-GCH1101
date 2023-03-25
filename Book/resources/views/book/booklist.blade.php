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
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection