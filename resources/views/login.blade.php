@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-4">
        <p>Login Page</p>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <form method="POST" action=" {{ route('validate') }} ">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Username:</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email"
                    name="email" value="{{ old('email') }}" placeholder="Digite su email" required>
                @error('email')
                    <div class="alert alert-primary" role="alert">
                        {{  $message }}
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
