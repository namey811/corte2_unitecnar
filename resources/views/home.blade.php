@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Unitecnar 5.0</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Bienvenidos a la web de Unitecnar 5.0, donde encontraras nuevas funcionalidades, mayor rendimiento y una mejor experiencia de usuario.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Ver mas</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Splavia 5.0</button>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="https://unitecnar.edu.co/sites/default/files/PRGRADO-BANNER2.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>
@endsection
