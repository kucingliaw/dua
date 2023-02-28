@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <main class="form-registration col-md-6 col-lg-5 my-2">
            <form action="/register" method="post">
                @csrf

                <h1 class="display-6 text-center mb-3">Formulir Registrasi</h1>
                {{-- Fullname --}}
                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                        name="fullname" placeholder="Your fullname" autofocus value="{{ old('fullname') }}">
                    <label for="fullname">Your Full Name</label>
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Username --}}
                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" placeholder="Username" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-floating mb-2">
                    <input type="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Kelas --}}
                <select class="form-select mb-2 p-3" aria-label="Default select example">
                    <option value="">XII - A</option>
                    <option value="">XII - B</option>
                    <option value="">XII - C</option>
                </select>

                {{-- Password --}}
                <div class="form-floating mb-2">
                    <input type="text" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

                <p class="text-muted text-center mt-2">Already registered? <a class="text-decoration-none"
                        href="{{ route('login') }}">Login now!</a></p>
            </form>
        </main>
    </div>
@endsection
