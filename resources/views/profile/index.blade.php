@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile Dosen</h1>
        </div>

        <!-- Content -->
        <div class="page-body">
            <div class="container-xl">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    Foto Profile
                                </div>
                                <div class="card-body">
                                    @csrf
                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 style="text-align:center">JPG atau PNG tidak lebih dari 2MB</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <input type="file" name="foto" class="form-control">
                                            <input type="hidden" name="old_foto" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    Data Dosen
                                </div>
                                <div class="card-body">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" value="" id="name" name="name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Fakultas</label>
                                                <input type="text" value="" id="fakultas" name="fakultas"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Program Studi</label>
                                                <input type="text" value="" id="prodi" name="prodi"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Jabatan Fungsional</label>
                                                <input type="text" value="" id="jabatan" name="jabatan"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Golongan</label>
                                                <input type="text" value="" id="golongan" name="golongan"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-icon mb-3">
                                                <label for="">Alamat Email</label>
                                                <input type="email" value="" id="email" name="email"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Nomor HP</label>
                                                <input type="text" value="" id="no_hp" name="no_hp"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-icon mb-3">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" value="" id="tgl_lahir" name="tgl_lahir"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary w-100">
                                                    Simpan
                                                </button>
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
