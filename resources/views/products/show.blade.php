@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h1 class="display-4">Producto</h1>
                <span class="badge badge-primary">{{($product -> product)}}</span>
                <span class="badge badge-primary">{{$product->description}}</span>
                <span class="badge badge-primary">{{$product->price}}</span>
        </div>
    </div>
</div>
@endsection