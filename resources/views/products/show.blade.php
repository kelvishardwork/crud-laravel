@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Produto :

            {{$product->name}}
            <a href="{{route('products.edit', $product->id)}}" class="btn btn-default pull-right">Editar</a>
        </h2>
        <p>
            {{$product->short}}
        </p>
        {!! $product->body !!}
    </div>
    <div class="col-sm-4">
        mensagem
    </div>
@endsection