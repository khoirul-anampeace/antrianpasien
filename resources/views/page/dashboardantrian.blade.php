<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antrian Pasien</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    <!-- Navigasi -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container navsmooth">
                <a class="navbar-brand" href="#home">

                    <img src="{{ asset('assets/img/logowebdark.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                    <div class="d-flex">
                        <div id="time">24:00</div>
                        <div id="date"></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigasi -->
    <main>
        <!-- ScrollTOp -->
        <a href="#home">
            <div class="scrolltop" id="scrolltop">
                <i class="fa-solid fa-arrow-up"></i>
            </div>
        </a>
        <!-- ScrollTOp -->

        <section class="content" id="about">
            <div class="container">
                <div class="row g-0 d-flex">
                    <div class="col-md-12 col-sm-12 col-lg-12 align-self-center">
                        <div class="title" data-aos="fade-up">
                            <h1>
                                <span>No Antrian Saat Ini</span>
                            </h1>
                            <h2>{{ $data->no_antrian }}</h2>
                            <p class="koreg">Kode Registrasi {{ $data->kode_registrasi }}</p>
                            <p class="poli"> <b>Poli {{ $data->nama_poli }}</b></p>
                            <p class="detail">
                                Bagi pasien yang memiliki nomor antrian tersebut diharap untuk segera menuju ke loket.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- <script src="https://kit.fontawesome.com/62bf956e5e.js" crosssorigin="anonymous"></script> --}}
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
</body>

</html>
