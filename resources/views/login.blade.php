@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-4">
        <p>Login Page</p>
        <div class="mt-4 ml-2">
            <form method="POST" action="{{ route('validate') }}">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <br>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>

        </div>
    </div>
@endsection