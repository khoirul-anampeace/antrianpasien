@extends('layout.main')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Tambah Data Admin</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" id="detailCustomer">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-h-100">
                <div class="card-body">
                    <form action="{{ url('admin/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputkodedokter" class="form-label">Kode Admin</label>
                                <input type="text" name="kode_admin" class="form-control" id="inputkodedokter"
                                    placeholder="Kode Admin" required autocomplete="off" value="{{ $kode }}"
                                    readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNama" class="form-label">Nama Admin</label>
                                <input type="text" name="nama_admin" class="form-control" id="inputNama"
                                    placeholder="Nama Admin" required autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNama" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputNama"
                                    placeholder="Username" required autocomplete="off">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNama" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="inputNama"
                                    placeholder="Password" required autocomplete="off">
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <a href="{{ url('/admin') }}" class="btn btn-secondary">Batalkan</a>
                                <button type="submit" class="btn btn-primary float-end">Tambah</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div> <!-- end col -->
@endsection
