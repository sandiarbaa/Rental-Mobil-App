@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Daftar Mobil</h2>
        <div class="row justify-content-center">
            {{-- Button Add Data --}}
            <div class="col-md-4 mb-3">
                <h4 class="mb-3">Tambah Data Mobil</h4>
                <a href="{{ route('mobils.create') }}" class="btn btn-dark">Tambah Mobil</a>

                @if (session('addDataSuccess'))
                    <div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
                        <p>{{ session('addDataSuccess') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('editDataSuccess'))
                    <div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
                        <p>{{ session('editDataSuccess') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            {{-- Table --}}
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Tabel Data Mobil</h5>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-bordered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>Mulai Booking</th>
                                    <th>Selesai Booking</th>
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
                                            <td>{{ $mobil->start_booking }}</td>
                                            <td>{{ $mobil->finish_booking }}</td>
                                            <td class="d-flex justify-content-around">
                                                <a href="{{ route('mobils.show', $mobil->id) }}" class="btn btn-outline-dark btn-sm">Lihat</a>
                                                <a href="{{ route('mobils.edit', $mobil->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                                                <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-dark btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Data masih kosong.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            Menampilkan {{ $mobils->firstItem() }} hingga {{ $mobils->lastItem() }} dari {{ $mobils->total() }} hasil
                        </div>
                        <nav>
                            <ul class="pagination mb-0">
                                {{-- Previous Page Link --}}
                                @if ($mobils->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link bg-dark border-dark text-white">«</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link bg-dark border-dark text-white" href="{{ $mobils->previousPageUrl() }}" rel="prev">«</a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($mobils->getUrlRange(1, $mobils->lastPage()) as $page => $url)
                                    @if ($page == $mobils->currentPage())
                                        <li class="page-item active">
                                            <span class="page-link bg-dark border-dark text-white">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link bg-dark border-dark text-white" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($mobils->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link bg-dark border-dark text-white" href="{{ $mobils->nextPageUrl() }}" rel="next">»</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link bg-dark border-dark text-white">»</span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
