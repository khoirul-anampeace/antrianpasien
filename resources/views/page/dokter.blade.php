@extends('layout.main')

@section('content')
    <!-- start page title -->

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">
                    <a href="{{ url('/dokter/create') }}" class="btn btn-primary">Tambah Data</a>
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

                <h4 class="page-title">Dokter</h4>

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

                        <th>Kode Dokter</th>

                        <th>Nama Dokter</th>

                        <th>Poli</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $dokter)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $dokter->kode_dokter }}</td>
                            <td>{{ $dokter->nama_dokter }}</td>
                            <td>{{ $dokter->nama_poli }}</td>
                            <td class="table-action">

                                <a href="{{ url('/dokter/show/' . $dokter->id) }}" class="btn btn-warning"><i
                                        class='bx bxs-edit-alt'></i></a>

                                <!-- <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a> -->

                                <a href="{{ url('/dokter/destroy/' . $dokter->id) }}" class="btn btn-danger"><i
                                        class='bx bxs-comment-x'></i></a>

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
