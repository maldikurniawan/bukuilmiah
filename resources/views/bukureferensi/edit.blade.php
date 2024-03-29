@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Pengajuan Buku Referensi</h1>
        </div>

        <!-- Content -->
        <div class="page-body">
            <div class="container-xl">
                <form action="{{ route('bukureferensi.update', $bukureferensi->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Edit Data Pengajuan Buku Referensi
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <label for="">Judul Buku</label>
                                                <input type="text" value="{{ $bukureferensi->judul_buku }}"
                                                    id="judul_buku" name="judul_buku"
                                                    class="form-control @error('judul_buku') is-invalid @enderror">
                                                @error('judul_buku')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <label for="">ISBN</label>
                                                <input type="text" value="{{ $bukureferensi->isbn }}" id="isbn"
                                                    name="isbn" class="form-control @error('isbn') is-invalid @enderror">
                                                @error('isbn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Edisi</label>
                                                <input type="text" value="{{ $bukureferensi->edisi }}" id="edisi"
                                                    name="edisi"
                                                    class="form-control @error('edisi') is-invalid @enderror">
                                                @error('edisi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Penerbit</label>
                                                <input type="text" value="{{ $bukureferensi->penerbit }}" id="penerbit"
                                                    name="penerbit"
                                                    class="form-control @error('penerbit') is-invalid @enderror">
                                                @error('penerbit')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Jumlah Halaman</label>
                                                <input type="text" value="{{ $bukureferensi->jml_halaman }}"
                                                    id="jml_halaman" name="jml_halaman"
                                                    class="form-control @error('jml_halaman') is-invalid @enderror">
                                                @error('jml_halaman')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">URL</label>
                                                <input type="text" value="{{ $bukureferensi->url }}" id="url"
                                                    name="url" class="form-control @error('url') is-invalid @enderror">
                                                @error('url')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Tahun Terbit</label>
                                                <input type="text" value="{{ $bukureferensi->thn_terbit }}"
                                                    id="thn_terbit" name="thn_terbit"
                                                    class="form-control @error('thn_terbit') is-invalid @enderror">
                                                @error('thn_terbit')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Jumlah Anggota</label>
                                                <input type="text" value="{{ $bukureferensi->jml_anggota }}"
                                                    id="jml_anggota" name="jml_anggota"
                                                    class="form-control @error('jml_anggota') is-invalid @enderror">
                                                @error('jml_anggota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    Simpan
                                                </button>
                                                <a href="{{ route('bukureferensi.index') }}"
                                                    class="btn btn-danger">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
