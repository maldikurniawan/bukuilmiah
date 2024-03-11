@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buku Ajar</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan Buku Ajar</h6>
            </div>
            <div class="row ml-1 mt-2">
                <div class="col-12">
                    <a href="{{ route('bukuajar.create') }}" class="btn btn-primary">
                        <i class="fas fa-fw fa-plus"></i>
                        Tambah Pengajuan
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Mata Kuliah</th>
                                <th>ISBN</th>
                                <th>Penerbit</th>
                                <th>Jumlah Halaman</th>
                                <th>URL</th>
                                <th>Tahun Terbit</th>
                                <th>Jumlah Anggota</th>
                                <th>Status Reviewer</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($bukuajar as $d)
                                <tr>
                                    <td>{{ $no }}.</td>
                                    <td>{{ $d->judul_buku }}</td>
                                    <td>{{ $d->matkul }}</td>
                                    <td>{{ $d->isbn }}</td>
                                    <td>{{ $d->penerbit }}</td>
                                    <td>{{ $d->jml_halaman }}</td>
                                    <td>{{ $d->url }}</td>
                                    <td>{{ $d->thn_terbit }}</td>
                                    <td>{{ $d->jml_anggota }}</td>
                                    <td>
                                        @if ($d->status == 0)
                                            Belum Divalidasi
                                        @else
                                            Sudah Divalidasi
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="#" style="margin-left:5px" method="POST">
                                                @csrf
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-fw fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm delete-confirm">
                                                    <i class="fas fa-fw fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php    $no++    @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
