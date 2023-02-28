@extends('dashboard.partials.main')

@section('content')
    <div class="table-responsive">
        <h3 class="mb-2">Daftar Buku</h3>

        {{-- Alert --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="my-3">
            <a href="/dashboard/buku/create" class="btn btn-primary">Tambah Buku</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Kategori</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr class="text-center">
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $buku->judul }}</th>
                        <th>{{ $buku->penerbit->nama }}</th>
                        <th>{{ $buku->kategori->nama }}</th>
                        <th>{{ $buku->tahun_terbit }}</th>
                        <th>{{ $buku->isbn }}</th>
                        <th>
                            {{-- Read --}}
                            <a href="/dashboard/buku/{{ $buku->id }}" class="badge bg-primary p-1">
                                <span data-feather="eye" class=""></span>
                            </a>

                            {{-- Edit --}}
                            <a href="/dashboard/buku/{{ $buku->id }}/edit" class="badge bg-warning p-1">
                                <span data-feather="edit" class=""></span>
                            </a>

                            {{-- Delete --}}
                            <form action="/dashboard/buku/{{ $buku->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger p-1 border-0"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                    <span data-feather="trash" class=""></span>
                                </button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
