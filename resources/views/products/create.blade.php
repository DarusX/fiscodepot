@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-6">
                <form action="{{route('products.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Producto</label>
                        <input type="text" name="product" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" name="price" class="form-control">
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