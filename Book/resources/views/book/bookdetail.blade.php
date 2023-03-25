@extends('book.layout')
@section('title', 'Book Detail')
@section('content')
  <div class="card">
    <div class="card-header">
        <h1>{{$book->title}}</h1>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{$book->author}}</h4>
        <p class="card-text">{{$book->description}}</p>
    </div>
    <div class="card-footer text-muted">
        
    </div>
  </div>
@endsection