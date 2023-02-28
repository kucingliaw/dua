@extends('layouts.main')

@section('content')
    <h1 class="display-4">Halaman {{ $title }}</h1>

    @auth
        <h3>Welcome Back, {{ auth()->user()->fullname }}</h3>
    @endauth
@endsection
