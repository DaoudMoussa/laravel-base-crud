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
                                <td>
                                    <a class="btn btn-info" href="{{ route('products.show', [ 'product' => $product->id ]) }}">Dettaglio</a>
                                    <a class="btn btn-warning" href="{{ route('products.edit', [ 'product' => $product->id ]) }}">Modifica</a>
                                    <form class="d-inline-block" action="{{ route('products.destroy', [ 'product' => $product->id ]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('products.create') }}">Aggiungi prodotto</a>
            </div>
        </div>
    </main>
@endsection
