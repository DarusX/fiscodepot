@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="py-2">{{$product->product}}</td>
                    <td class="py-2">{{$product->price}}</td>
                    <td class="py-2">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-dark">Ver</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-dark">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection