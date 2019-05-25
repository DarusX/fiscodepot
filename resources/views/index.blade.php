@extends('layouts.app')
@section('content')
<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/slider/01.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Fisco Depot</h2>
                <p>CONTABILIDAD | IMPUESTOS | CAPACITACIÓN EN LINEA | PRODUCTOS FISCALES | SERVICIOS</p>
                <a href="" class="btn btn-lg btn-success">Contacte ahora</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/slider/01.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Fisco Depot</h2>
                <p>CONTABILIDAD | IMPUESTOS | CAPACITACIÓN EN LINEA | PRODUCTOS FISCALES | SERVICIOS</p>
                <a href="" class="btn btn-lg btn-success">Contacte ahora</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 py-4">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <i class="fas fa-shopping-cart icon"></i>
                        </div>
                        <div class="col-md-12 py-3">
                            <h4>Tienda en Línea</h4>
                        </div>
                        <div class="col-md-12 py-3">
                            <p>Todo para la Contabilidad y los Impuestos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <i class="fas fa-book icon"></i>
                        </div>
                        <div class="col-md-12 py-3">
                            <h4>Productos Fiscales</h4>
                        </div>
                        <div class="col-md-12 py-3">
                            <p>Productos oficiales para el área fiscal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-4">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <i class="fas fa-gavel icon"></i>
                        </div>
                        <div class="col-md-12 py-3">
                            <h4>Trámites y Servicios Fiscales</h4>
                        </div>
                        <div class="col-md-12 py-3">
                            <p>Tramites y Servicios Fiscales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection