@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <main class="form-signin col-md-5 col-lg-4 my-2">
            <form action="/login" method="post">
                @csrf

                <h1 class="display-6 text-center mb-3">Please Login</h1>

                {{-- Success Flash --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Failed Flash --}}
                @if (session()->has('loginFailed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginFailed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Username --}}
                <div class="form-floating mb-2">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="username" autofocus value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>
@endsection
