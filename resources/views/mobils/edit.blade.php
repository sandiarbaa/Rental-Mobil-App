@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 my-5">
            <h2>Edit Mobil</h2>
            <form action="{{ route('mobils.update', $mobil->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="{{ $mobil->merk }}">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $mobil->model }}">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $mobil->tahun }}">
                </div>
                <div class="mb-3">
                    <label for="harga_beli" class="form-label">Harga Sewa</label>
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="{{ $mobil->harga_beli }}">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5">{{ $mobil->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="start_booking" class="form-label">Mulai Booking</label>
                    <input type="date" class="form-control" id="start_booking" name="start_booking" value="{{ $mobil->start_booking }}">
                </div>
                <div class="mb-3">
                    <label for="finish_booking" class="form-label">Selesai Booking</label>
                    <input type="date" class="form-control" id="finish_booking" name="finish_booking" value="{{ $mobil->finish_booking }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('mobils.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
