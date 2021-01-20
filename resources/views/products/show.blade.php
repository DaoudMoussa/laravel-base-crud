@extends('layouts.app')

@section('title', 'products - Home')

@section('products', 'active')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul>
                        <li>
                            <h1>{{ $product->name }}</h1>
                            <p>{{ $product->id }}</p>
                            <p>{{ $product->type }}</p>
                            <p>{{ $product->price }} $</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
