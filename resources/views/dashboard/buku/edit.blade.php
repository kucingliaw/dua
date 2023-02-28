@extends('dashboard.partials.main')

@section('content')
    <div class="container">
        <h3 class="mb-2">Edit Buku</h3>

        <form action="/dashboard/buku/{{ $buku->id }}" method="post" class="col-lg-6">
            @method('put')
            @csrf

            {{-- Judul --}}
            <label for="judul" class="form-label mt-2">Judul Buku</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                autofocus value="{{ old('judul', $buku->judul) }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            {{-- Kategori --}}
            <label for="kategori" class="form-label mt-2">Kategori</label>
            <select name="kategori_id" id="kategori" class="form-select">
                @foreach ($kategoris as $kt)
                    <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
                @endforeach
            </select>

            {{-- Penerbit --}}
            <label for="penerbit" class="form-label mt-2">Penerbit</label>
            <select name="penerbit_id" id="penerbit" class="form-select">
                @foreach ($penerbits as $pb)
                    <option value="{{ $pb->id }}">{{ $pb->nama }}</option>
                @endforeach
            </select>

            {{-- Tahun Terbit --}}
            <label for="tahun_terbit" class="form-label mt-2">Tahun Terbit</label>
            <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit"
                id="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
            @error('tahun_terbit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            {{-- ISBN --}}
            <label for="isbn" class="form-label mt-2">ISBN</label>
            <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" id="isbn"
                value="{{ old('isbn', $buku->isbn) }}">
            @error('isbn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Edit</button>
        </form>
    </div>
@endsection
