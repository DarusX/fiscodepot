@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-6">
                <form action="{{route('products.update', $product)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="">Producto</label>
                        <input type="text" name="product" class="form-control" value="{{$product -> product}}">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="description" class="form-control" value="{{($product -> description)}}">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" name="price" class="form-control" value="{{$product -> price}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                                <i class="far fa-save"></i> Guardar
                        </button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
