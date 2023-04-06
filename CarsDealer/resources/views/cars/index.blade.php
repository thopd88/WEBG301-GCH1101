@extends('layouts.app')
@section('title', 'Cars')
@section('header')
    @include('partials.header')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Travelled Distance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->Make }}</td>
                    <td>{{ $car->Model }}</td>
                    <td>{{ $car->TravelledDistance }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection