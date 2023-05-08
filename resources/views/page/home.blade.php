@extends('layout.main')

@section('content')
    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

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

                <h4 class="page-title">Dashboard</h4>

            </div>

        </div>

    </div>

    <!-- end page title -->



    <div class="row">

        <div class="col-md-4">

            <div class="card text-white bg-info overflow-hidden" style="height: 130px;">

                <div class="card-body">

                    <div class="toll-free-box">

                        <h3> <i class="mdi mdi-deskphone"></i>Rp 999</h3>

                        <p>Total Uang Masuk Transaksi Lepas Kunci</p>

                    </div>

                </div> <!-- end card-body-->

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-white bg-warning overflow-hidden" style="height: 130px;">

                <div class="card-body">

                    <div class="toll-free-box">

                        <h3> <i class="mdi mdi-deskphone"></i>Rp 999</h3>

                        <p>Total Uang Masuk Transaksi Dengan Driver</p>

                    </div>

                </div> <!-- end card-body-->

            </div>

        </div>

        <div class="col-md-4">

            <div class="card bg-success text-white overflow-hidden" style="height: 130px;">

                <div class="card-body">

                    <div class="toll-free-box">

                        <h3> <i class="mdi mdi-deskphone"></i>Rp 999</h3>

                        <p>Total Transaksi Uang Masuk </p>

                    </div>

                </div> <!-- end card-body-->

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xl-3 col-lg-4">

            <div class="card tilebox-one">

                <div class="card-body">

                    <!-- <i class='uil uil-money-withdraw float-end'></i> -->

                    <h6 class="text-uppercase mt-0">Total Transaksi Lepas Kunci</h6>

                    <h2 class="my-2">999</h2>

                    <p class="mb-0 text-muted">

                        <span class="text-nowrap">Lepas Kunci</span>

                    </p>

                </div> <!-- end card-body-->

            </div>

            <!--end card-->



            <div class="card tilebox-one">

                <div class="card-body">

                    <!-- <i class='uil uil-money-withdraw float-end'></i> -->

                    <h6 class="text-uppercase mt-0">Total Transaksi Dengan Driver</h6>

                    <h2 class="my-2">999</h2>

                    <p class="mb-0 text-muted">

                        <span class="text-nowrap">Lepas Kunci</span>

                    </p>

                </div> <!-- end card-body-->

            </div>

            <!--end card-->

            <!--end card-->



            <div class="card tilebox-one">

                <div class="card-body">

                    <!-- <i class='uil uil-money-withdraw float-end'></i> -->

                    <h6 class="text-uppercase mt-0">Mobil Tersedia</h6>

                    <h2 class="my-2">999</h2>

                    <p class="mb-0 text-muted">



                    </p>

                </div> <!-- end card-body-->

            </div>

            <!--end card-->

        </div> <!-- end col -->





    </div>
@endsection
