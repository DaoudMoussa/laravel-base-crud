@extends('layouts.app')

@section('title', 'create new product')

@section('products', 'active')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Inserisci nome prodotto">
                        </div>
                        <div class="form-group">
                            <label>Tipo</label>
                            <input type="text" name="type" class="form-control" placeholder="Inserisci tipo prodotto">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input type="text" name="price" class="form-control" placeholder="Inserisci prezzo prodotto">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
