@extends('layouts.app')
@section('title', 'Car Details')
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
            <tr>
                <td>{{ $car->Make }}</td>
                <td>{{ $car->Model }}</td>
                <td>{{ $car->TravelledDistance }}</td>
            </tr>
        </tbody>
    </table>

    <a href="/cars/{{ $car->id }}/edit">Edit</a>

    <form method="POST" action="/cars/{{ $car->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>

    <table>
        <thead>
            <tr>
                <th>Customer</th>
                <th>Price</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($car->sales as $sale)
                <tr>
                    <td>{{ $sale->customer->Name }}</td>
                    <td>{{ $sale->Price }}</td>
                    <td>
                        <a href="/sales/{{ $sale->id }}">Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/sales/create?car_id={{ $car->id }}">Create Sale</a>

    <table>
        <thead>
            <tr>
                <th>Part</th>
                <th>Quantity</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($car->parts as $part)
                <tr>
                    <td>{{ $part->Name }}</td>
                    <td>{{ $part->Quantity }}</td>
                    <td>
                        <a href="/cars/{{ $car->id }}/parts/{{ $part->id }}/edit">Edit</a>
                        <form method="POST" action="/cars/{{ $car->id }}/parts/{{ $part->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection