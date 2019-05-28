@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><strong>Productos</strong></h2>
        </div>
        <div class="col-md-12">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="py-2">{{$product->product}}</td>
                                <td class="py-2">{{$product->price}}</td>
                                <td class="py-2">
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-dark"><i class="fas fa-pen"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection