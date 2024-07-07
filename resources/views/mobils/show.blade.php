@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8">
            <h2>Detail Mobil</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $mobil->merk }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $mobil->model }}</h6>
                    <p class="card-text">{{ $mobil->deskripsi }}</p>
                    <div class="row mb-3">
                      <h6 class="col-3 card-subtitle text-muted">Tahun : {{ $mobil->tahun }}</h6>
                      <h6 class="col-4 card-subtitle text-muted">Harga : Rp {{ number_format($mobil->harga_beli, 0, ',', '.') }}</h6>
                    </div>
                </div>
              </div>
              <a href="{{ route('mobils.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection
