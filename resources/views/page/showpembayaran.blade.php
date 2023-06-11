@extends('layout.main')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Edit Jenis Pembayaran</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" id="detailCustomer">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-h-100">
                <div class="card-body">
                    <form action="{{ url('pembayaran/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inputkodedokter" class="form-label">Kode Pembayaran</label>
                                <input type="text" name="kode_pembayaran" class="form-control" id="inputkodedokter"
                                    placeholder="Kode Pembayaran" required autocomplete="off"
                                    value="{{ $data->kode_pembayaran }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputNama" class="form-label">Jenis Pembayaran</label>
                                <input type="text" name="jenis_pembayaran" class="form-control" id="inputNama"
                                    placeholder="Jenis Pembayaran" required autocomplete="off"
                                    value="{{ $data->jenis_pembayaran }}">
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <a href="{{ url('/pembayaran') }}" class="btn btn-secondary">Batalkan</a>
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div> <!-- end col -->
@endsection
