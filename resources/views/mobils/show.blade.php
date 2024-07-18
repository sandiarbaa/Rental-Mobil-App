@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4 text-center">Detail Mobil</h2>
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Merk: {{ $mobil->merk }}</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3 text-muted">Tipe: {{ $mobil->model }}</h6>
                    <p class="card-text">{{ $mobil->deskripsi }}</p>
                    <div class="row my-4">
                        <div class="col-6">
                            <h6 class="card-subtitle text-muted">Tahun Rilis: {{ $mobil->tahun }}</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle text-muted">Harga Sewa: Rp {{ number_format($mobil->harga_beli, 0, ',', '.') }}</h6>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="card-subtitle text-muted">Mulai Booking: {{ $mobil->start_booking }}</p>
                        </div>
                        <div class="col-6">
                            <p class="card-subtitle text-muted">Selesai Booking: {{ $mobil->finish_booking }}</p>
                        </div>
                    </div>
                    <a href="{{ route('mobils.index') }}" class="btn btn-dark">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
