@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <input name="email" type="email" placeholder="email" />
        <input name="password" type="password" placeholder="password" />

        <button type="submit">Login</button>
    </form>
@endsection
