@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Lista de Produtos
            <a href="{{route('products.create')}}" class="btn btn-primary pull-right">Novo</a>
        </h2>
        @include('products.fragment.info')

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nome</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{$product->id}}</td>
                    <td>
                        <strong>{{$product->name}}</strong>
                        {{ $product->short }}

                    </td>
                    <td><a href="{{route('products.show', $product->id)}}" class="btn btn-link">ver</a></td>
                    <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-link">editar</a></td>
                    <td>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
    <div class="col-sm-4">
        mensagem
    </div>
@endsection