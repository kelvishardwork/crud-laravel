@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Editar Produto :
            {{$product->name}}
            <a href="{{route('products.index')}}" class="btn btn-default pull-right">Todos os Produtos</a>
        </h2>
        @include('products.fragment.error')

        {!! Form::model($product,['route'=>['products.update',$product->id],
                                            'method'=>'PUT']) !!}
        @include('products.fragment.form')
        {!! Form::close()!!}
    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>
@endsection