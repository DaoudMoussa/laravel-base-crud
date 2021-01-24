@extends('layouts.app')

@section('title', 'edit product')

@section('products', 'active')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('products.update', [ 'product' => $product->id ]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nome</label>
                            <input value="{{ $product->name }}" type="text" name="name" class="form-control" placeholder="Inserisci nome prodotto">
                        </div>
                        <div class="form-group">
                            <label>Tipo</label>
                            <input value="{{ $product->type }}" type="text" name="type" class="form-control" placeholder="Inserisci tipo prodotto">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input value="{{ $product->price }}" type="text" name="price" class="form-control" placeholder="Inserisci prezzo prodotto">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
