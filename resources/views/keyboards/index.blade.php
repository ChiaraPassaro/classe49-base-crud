@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="h1">Admin - All Keyboards</h1>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('keyboards.create') }}" class="btn btn-primary">Add new keyboard</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                 <table class="table table-primary">
                    <thead>
                        <tr class="table-primary">
                            <th>Name</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($keyboards as $keyboard)
                        <tr>
                            <td>{{ $keyboard->name }}</td>
                            <td>{{ $keyboard->sku }}</td>
                            <td>{{ $keyboard->price }} €</td>
                            <td><a class="btn btn-primary" href="{{ route('keyboards.show', $keyboard) }}">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $keyboards->links() }}
            </div>
        </div>
    </div>
   
@endsection