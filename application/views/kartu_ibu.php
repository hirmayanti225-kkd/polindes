<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
    @media print {
        @page {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .navbar-nav,
        .btn,
        th:nth-child(4),
        td:nth-child(4),
        footer,
        a#debug-icon {
            display: none;
        }
    }
    </style>
    <title>Polindes Kabar</title>
</head>

<body style="background-color: #D3D3D3;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Polindes Kabar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-5">
                        <a class="nav-link active" href="<?php echo base_url('index.php') ?>">Home</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link " aria-current="page"
                            href=" <?php echo base_url('index.php/welcome/profil_bidan') ?>">Profil</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="<?php echo base_url('index.php/welcome/laporan') ?>">Laporan</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a href="<?php echo base_url('index.php/welcome/help') ?>" class="btn btn-outline-light"
                            style="width: 100px;">Help</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mb-5 mt-3">
        <h1 class="text-center">KARTU IBU</h1>
        <div class="col-md">
            <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print<i
                    class="fa fa-print"></i></button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="row" style="width: 100%;">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <p">Lembar KIA-2</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="row" style="width: 100%;">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  float-right" id="exampleInputEmail1">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">Puskesmas</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">NO. IBU</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">NAMA LENGKAP</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">NAMA SUAMI</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">TANGGAL
                                        LAHIR</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">UMUR</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">ALAMAT
                                        DOMISILI</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">RT/RW</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1"
                                        class="col-sm- col-form-label float-left">DESA</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">KECAMATAN</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1"
                                        class="col-sm- col-form-label float-left">KABUPATEN</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">PROVINSI</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1"
                                        class="col-sm- col-form-label float-left">PENDIDIKAN</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">AGAMA</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1"
                                        class="col-sm- col-form-label float-left">PEKERJAAN</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">TGL. REGISTER</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-5">
                                <div class="col-4">
                                    <label for="exampleInputEmail1"
                                        class="col-sm- col-form-label float-left">Posyandu</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-5">
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Jamkesmas
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Jamsostek
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Jamkesda Askes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">Nama
                                        Kader</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2 ml-1">
                                <div>
                                    <p>Gol. Darah</p>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        A
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        B
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        AB
                                    </label>
                                </div>
                                <div class="form-check ml-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        O
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">Nama
                                        Dukun</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="col-sm- col-form-label"
                                        style="width: 100%;">No. Handphone</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row mt-2">
                                <h5><b>RIWAYAT OBSTERIK</b></h5>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row mt-2">
                                <h5><b>PEMERIKSAAN BIDAN</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Gravida</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Tanggal Periksa</label>
                                        </div>
                                        <div class="col-6 " style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">BB
                                                sebelum
                                                hamil</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Portus</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Tanggal HPHT</label>
                                        </div>
                                        <div class="col-6 " style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1" class="col-sm- col-form-label float-left">TB
                                                sebelum hamil</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Abortus</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Taksiran Persalinan</label>
                                        </div>
                                        <div class="col-6 " style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Buku KIA</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Memiliki
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Hidup</label>
                                        </div>
                                        <div class="col-6" style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2 ">
                                        <div class="col-6" style="width: 100%;">
                                            <label for="exampleInputEmail1"
                                                class="col-sm- col-form-label float-left">Persalinan Sebelum</label>
                                        </div>
                                        <div class="col-6 " style="width: 100%;">
                                            <input type="text" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-2">
                                <div class="container">
                                    <div class="row mt-2 ml-3">
                                        <div class="col-6" style="width: 100%;">
                                            <!--isi-->
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                Tidak Memiliki
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">Riwayat Komplikasi
                            Kebidanan</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <label for="exampleInputEmail1" class="col-sm- col-form-label">Penyakit Kronis dan
                            Alergi</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div>
                    <h5><b>RENCANA PERSALINAN</b></h5>
                </div>
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Rencana Penolong</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Pendamping</th>
                            <th scope="col">Transportasi</th>
                            <th scope="col">Pendonor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Kunjungan Rumah</td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Kondisi Rumah</td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>Penolong :</p>
                            </td>
                            <td>
                                <p>Tempat :</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>Pendamping :</p>
                            </td>

                            <td>
                                <p>Transportasi :</p>
                            </td>
                            <td>
                                <p>Calon donor darah :</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>1. Keluarga</p>
                            </td>
                            <td>
                                <p>1. Rumah</p>
                            </td>
                            <td>
                                <p>6. RSIA</p>
                            </td>
                            <td>
                                <p>1. Suami</p>
                            </td>
                            <td>
                                <p>1. Sepeda Motor</p>
                            </td>
                            <td>
                                <p>1. Suami</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>2. Dukun</p>
                            </td>
                            <td>
                                <p>2. Poskesdes/Polindes</p>
                            </td>
                            <td>
                                <p>7. RS</p>
                            </td>
                            <td>
                                <p>2. Keluarga</p>
                            </td>
                            <td>
                                <p>2. Mobil</p>
                            </td>
                            <td>
                                <p>2. Keluarga</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>3. Bidan</p>
                            </td>
                            <td>
                                <p>3. Pustu</p>
                            </td>
                            <td>
                                <p>8. RS Odha</p>
                            </td>
                            <td>
                                <p>3. Teman</p>
                            </td>
                            <td>
                                <p>3. Lain-lain (Cidomo, becak, benhur, dll)</p>
                            </td>
                            <td>
                                <p>3. Teman</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>4. dr Umum</p>
                            </td>
                            <td>
                                <p>4. Puskesmas</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>4. Tetangga</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>4. Lain-lain (Kader, masyarakat, polri, satpam)</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>5. dr. Spesialis</p>
                            </td>
                            <td>
                                <p>5. RB</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>5. Lain-lain (Dukun)</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p>5. Tidak ada</p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>6. Lain-lain</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td>
                                <p>7. Tidak ada</p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                        </tr>





                    </tbody>


                </table>
            </div>

        </div>























    </div>





    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>







































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
<div class="card text-center">
    <div class="card-body" style="background-color: #808080;">
        <h5 class="card-title">Spesial</h5>
        <p class="card-text">Untuk pelayanan lebih nyaman, silahkan datang ke polindes langsung!</p>
        <p><b>BUKA 24 JAM</b></p>
    </div>
</div>

</html>