@extends('layouts.second')

@section('content')
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-md-12 mb-5">
                <h2 class="mb-4 text-center mt-5">Tambah Mobil Baru</h2>
                <form action="{{ route('mobils.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-5 offset-md-1">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror" oninvalid="this.setCustomValidity('Merk tidak boleh kosong')" id="merk" name="merk" value="{{ old('merk') }}" autofocus required>
                            @error('merk')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}" required>
                            @error('model')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-5 offset-md-1">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
                            @error('tahun')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="harga_beli" class="form-label">Harga Sewa</label>
                            <input type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}" required>
                            @error('harga_beli')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-10 offset-md-1">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                            @error('deskripsi')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-5 offset-md-1">
                            <label for="start_booking" class="form-label">Mulai Booking</label>
                            <input type="date" class="form-control @error('start_booking') is-invalid @enderror" id="start_booking" name="start_booking" value="{{ old('start_booking') }}" required>
                            @error('start_booking')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="finish_booking" class="form-label">Selesai Booking</label>
                            <input type="date" class="form-control @error('finish_booking') is-invalid @enderror" id="finish_booking" name="finish_booking" value="{{ old('finish_booking') }}" required>
                            @error('finish_booking')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">Simpan Data</button>
                        <a href="{{ route('mobils.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
