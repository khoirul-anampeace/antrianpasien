@extends('layout.main')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Detail Pasien</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row" id="detailCustomer">
        <div class="col-xl-12 col-lg-12">
            <div class="card card-h-100">
                <div class="card-body">
                    {{-- <h4 class="header-title mb-3"><?= $row['nama_lengkap'] ?></h4> --}}
                    <div class="textDetail">

                        <table>
                            <tr>
                                <td class="first">
                                    <h5>NIK</h5>
                                </td>
                                <td class="second">
                                    <p>: {{ $pasien->nik }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="first">
                                    <h5>Nama</h5>
                                </td>
                                <td>
                                    <p>: {{ $pasien->nama_pasien }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="first">
                                    <h5>Tgl Lahir</h5>
                                </td>
                                <td>
                                    <p>: {{ $pasien->tanggal_lahir }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="first">
                                    <h5>Nama</h5>
                                </td>
                                <td>
                                    <p>: {{ $pasien->no_kontak }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <hr>

                    <h4>Histori Book</h4>
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
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach

                        </tbody>

                    </table>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div> <!-- end col -->
@endsection
