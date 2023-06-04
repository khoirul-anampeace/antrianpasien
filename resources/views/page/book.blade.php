@extends('layout.main')

@section('content')
    <!-- start page title -->

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">
                    {{-- <a href="{{ url('/dokter/create') }}" class="btn btn-primary">Tambah Data</a> --}}
                    <!-- <form class="d-flex">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="input-group">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <input type="text" class="form-control form-control-light" id="dash-daterange">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="input-group-text bg-primary border-primary text-white">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <i class="mdi mdi-calendar-range font-13"></i>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </span>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a href="javascript: void(0);" class="btn btn-primary ms-2">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <i class="mdi mdi-autorenew"></i>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </a>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </form> -->

                </div>

                <h4 class="page-title">Semua Book Antrian</h4>

            </div>

        </div>

    </div>

    <!-- end page title -->

    <div class="card">

        <div class="card-body">

            <form class="row">
                <div class="col-md-3 mb-3">
                    <input type="date" name="q" value="{{ $q }}" class="form-control" id="inputNama"
                        placeholder="Nama Dokter" autocomplete="off">
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-success">Filter</button>
                </div>
                <div class="col-md-3">Pada tanggal {{ $tanggal }}</div>
            </form>

            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Kode Registrasi</th>

                        <th>No Antrian</th>

                        <th>Nama Pasien</th>

                        <th>Nama Poli</th>

                        <th>Nama Dokter</th>

                        <th>Tgl Book</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $book)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $book->kode_registrasi }}</td>
                            <td>{{ $book->no_antrian }}</td>
                            <td>{{ $book->nama_pasien }}</td>
                            <td>{{ $book->nama_poli }}</td>
                            <td>{{ $book->nama_dokter }}</td>
                            <td>{{ $book->tanggal_booking }}</td>
                            <td>{{ $book->status }}</td>
                            <td class="table-action">
                                <a href="{{ url('/book/panggil/' . $book->id) }}" class="btn btn-warning mb-1"
                                    style="width: 100%">Panggil</a>
                                <a href="{{ url('/book/lewati/' . $book->id) }}" class="btn btn-danger"
                                    style="width: 100%">Lewati</a>
                            </td>

                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>
@endsection
