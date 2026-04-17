@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-4">
        <p>Register Page</p>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <form method="POST" action=" {{ route('register_user') }} ">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nombre:</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name"
                    name="name" value="{{ old('name') }}" placeholder="Digite su nombre" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Correo:</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                    name="email" value="{{ old('email') }}" placeholder="Digite su email" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password:</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password"
                    placeholder="Digite su contraseña" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Ingresar">
            </div>
        </form>
    </div>
@endsection
