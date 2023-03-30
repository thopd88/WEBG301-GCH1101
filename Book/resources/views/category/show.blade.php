@extends('category.layout')
@section('title', 'Category Show')
@section('content')
    <div class="card-header">
        <h3>Category Show</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" readonly>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Book Title</th>
                        <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->getBooks as $book)
                        <tr>
                            <td>
                                <a href="{{ route('books.show', $book->id) }}">
                                    {{ $book->title }}
                                </a>
                            </td>
                            <td>{{ $book->author }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
    </div>