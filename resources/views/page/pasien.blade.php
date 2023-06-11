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

                <h4 class="page-title">Pasien</h4>

            </div>

        </div>

    </div>

    <!-- end page title -->

    <div class="card">

        <div class="card-body">

            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>NIK</th>

                        <th>Nama Pasien</th>

                        <th>Tgl Lahir</th>

                        <th>No Kontak</th>

                        <th>Aksi</th>
                    </tr>

                </thead>


                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $pasien)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $pasien->nik }}</td>
                            <td>{{ $pasien->nama_pasien }}</td>
                            <td>{{ $pasien->tanggal_lahir }}</td>
                            <td>{{ $pasien->no_kontak }}</td>
                            <td class="table-action">

                                <a href="{{ url('/pasien/show/' . $pasien->id) }}" class="btn btn-success">Detail</a>
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
