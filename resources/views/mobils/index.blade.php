@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-8 col-md-10">
            <h2>Daftar Mobil</h2>
            <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ session('success') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($mobils->count() > 0)
                        @foreach ($mobils as $mobil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mobil->merk }}</td>
                                <td>{{ $mobil->model }}</td>
                                <td>
                                    <a href="{{ route('mobils.show', $mobil->id) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('mobils.edit', $mobil->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">Data masih kosong.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $mobils->links() }} {{-- Menampilkan pagination links --}}
        </div>
    </div>
@endsection
