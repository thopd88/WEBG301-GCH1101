@extends('layouts.app')
@section('title', 'Create Car')
@section('header')
    @include('partials.header')
@section('content')
    <form method="POST" action="/cars">
        @csrf
        <div>
            <label for="Make">Make</label>
            <input type="text" name="Make" id="Make">
        </div>
        <div>
            <label for="Model">Model</label>
            <input type="text" name="Model" id="Model">
        </div>
        <div>
            <label for="TravelledDistance">Travelled Distance</label>
            <input type="text" name="TravelledDistance" id="TravelledDistance">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
