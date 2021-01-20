@extends('layouts.app')

@section('title', 'products - Home')

@section('products', 'active')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }} $</td>
                                <td><a class="btn btn-primary" href="{{ route('products.show', [ 'product' => $product->id ]) }}">Dettaglio</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
