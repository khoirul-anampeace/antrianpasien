@extends('layout.main')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Edit Data Dokter</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" id="detailCustomer">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-h-100">
                <div class="card-body">
                    @foreach ($data as $data)
                        <form action="{{ url('dokter/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="inputkodedokter" class="form-label">Kode Dokter</label>
                                    <input type="text" name="kode_dokter" class="form-control" id="inputkodedokter"
                                        placeholder="Kode Dokter" required autocomplete="off"
                                        value="{{ $data->kode_dokter }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputNama" class="form-label">Nama Dokter</label>
                                    <input type="text" name="nama_dokter" class="form-control" id="inputNama"
                                        placeholder="Nama Dokter" required autocomplete="off"
                                        value="{{ $data->nama_dokter }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="inputjenis" class="form-label">Jenis Poli</label>
                                    <select class="form-select" name="kode_poli" aria-label="Default select example">
                                        <option value="{{ $data->kode_poli }}">{{ $data->nama_poli }}</option>
                                        @foreach ($datapoli as $datas)
                                            <option value="{{ $datas->kode_poli }}">{{ $datas->nama_poli }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <a href="{{ url('/dokter') }}" class="btn btn-secondary">Batalkan</a>
                                    <button type="submit" class="btn btn-primary float-end">Update</button>
                                </div>
                            </div>
                        </form>
                    @endforeach

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div> <!-- end col -->
@endsection