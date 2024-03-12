@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Buku Ajar</h1>
        </div>

        <!-- Content -->
        <div class="page-body">
            <div class="container-xl">
                <form action="{{ route('bookchapter.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Data Pengajuan Buku Ajar Baru
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <label for="">Judul Buku</label>
                                                <input type="text" value="" id="judul_buku" name="judul_buku"
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
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Judul Book Chapter</label>
                                                <input type="text" value="" id="book_chapter" name="book_chapter"
                                                    class="form-control @error('book_chapter') is-invalid @enderror">
                                                @error('book_chapter')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">ISBN</label>
                                                <input type="text" value="" id="isbn" name="isbn"
                                                    class="form-control @error('isbn') is-invalid @enderror">
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
                                                <input type="text" value="" id="edisi" name="edisi"
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
                                                <input type="text" value="" id="penerbit" name="penerbit"
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
                                                <input type="text" value="" id="jml_halaman" name="jml_halaman"
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
                                                <input type="text" value="" id="url" name="url"
                                                    class="form-control @error('url') is-invalid @enderror">
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
                                                <input type="text" value="" id="thn_terbit" name="thn_terbit"
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
                                                <input type="text" value="" id="jml_anggota" name="jml_anggota"
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
                                                <a href="{{ route('bookchapter.index') }}"
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
