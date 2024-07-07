{{-- @extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Mobil</h2>
            <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
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
                </tbody>
            </table>
            {{ $mobils->links() }}
        </div>
    </div>
@endsection --}}


@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Mobil</h2>
            <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($mobils->isEmpty())
                <div class="alert alert-info">
                    <p>Belum ada data mobil.</p>
                </div>
            @else
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
                    </tbody>
                </table>
                {{ $mobils->links() }}
            @endif
        </div>
    </div>
@endsection
