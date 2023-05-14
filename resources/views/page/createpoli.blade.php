@extends('layout.main')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Tambah Data Poli</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" id="detailCustomer">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-h-100">
                <div class="card-body">
                    <form action="{{ url('poli/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputkodedokter" class="form-label">Kode Poli</label>
                                <input type="text" name="kode_poli" class="form-control" id="inputkodedokter"
                                    placeholder="Kode Poli" required autocomplete="off" value="{{ $kode }}"
                                    readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNama" class="form-label">Nama Poli</label>
                                <input type="text" name="nama_poli" class="form-control" id="inputNama"
                                    placeholder="Nama Poli" required autocomplete="off">
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <a href="{{ url('/poli') }}" class="btn btn-secondary">Batalkan</a>
                                <button type="submit" class="btn btn-primary float-end">Tambah</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div> <!-- end col -->
@endsection
