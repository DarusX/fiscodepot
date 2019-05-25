@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-4 py-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">{{$product->product}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <div class="card-footer">
                    @auth
                    <a href="{{route('products.payment', $product)}}" class="btn btn-sm btn-dark paypal-payment">Comprar con Paypal <i class="fab fa-paypal"></i> </a>
                    @else
                    <a href="{{route('login')}}" class="btn btn-sm btn-dark">Inicie sesion para comprar</a>
                    @endauth
                    <button class="btn btn-sm btn-light"><strong>${{number_format($product->price, 2)}}</strong></button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script>
    $(".paypal-payment").click(function (event) {
        event.preventDefault()

        $.ajax({
            url: $(this).attr('href'),
            success: (response) => {
                window.open(response, '_blank')
            }
        })
    })
</script>
@endsection