@extends('dashboard.partials.main')

@section('content')
    <h3>Detail Buku</h3>

    <div class="row py-4">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $buku->judul }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $buku->kategori->nama }}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
