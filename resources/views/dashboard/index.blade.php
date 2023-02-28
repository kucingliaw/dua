@extends('dashboard.partials.main')

@section('content')
    <div class="container py-2">
        <h3 class="mb-2 mb-3">Welcome Back, {{ auth()->user()->fullname }}</h3>

        <div class="d-flex flex-wrap gap-2">

            {{-- Menampilkan Jumlah Buku --}}
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Buku</h5>
                    <p class="card-text display-4">{{ count($bukus) }}</p>
                </div>
            </div>

            {{-- Menampilkan Jumlah Penerbit --}}
            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Penerbit</h5>
                    <p class="card-text display-4">{{ count($penerbits) }}</p>
                </div>
            </div>

            {{-- Menampilkan Jumlah Kategori --}}
            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kategori</h5>
                    <p class="card-text display-4">{{ count($kategoris) }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
