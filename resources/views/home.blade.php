@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Route::is('home'))
                <div id="link-profile" class="d-flex justify-content-center mb-3">
                    <p style="font-size:24px"><span style="color: blue; font-weight: bold;">Mi colección</span> / <a href="{{ route('repeated') }}" style="text-decoration:none; color:black;">Repetidas</a></p>
                </div>

                <div class="card">
                    <div class="card-header">¡Hola putita!</div>
                    <div class="card-body">Estás en la sección de tu colección</div>
                </div>
            @endif
            
            @if (Route::is('repeated'))
                <div id="link-profile" class="d-flex justify-content-center mb-3">
                    <p style="font-size:24px"><a href="{{ route('home') }}" style="text-decoration:none; color:black">Mi colección</a> / <span style="font-weight: bold; color: blue;">Repetidas</span></p>
                </div>

                <div class="card">
                    <div class="card-header">¡Hola putita!</div>
                    <div class="card-body">Estás en la sección de tus monedas repetidas</div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
