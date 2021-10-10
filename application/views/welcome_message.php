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

    <title>Polindes Kabar</title>
</head>

<body style="background-color: #D3D3D3;">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Polindes Kabar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-5">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php') ?>"">Home</a>
                    </li>
                    <li class=" nav-item ml-5">
                            <a class="nav-link"
                                href="<?php echo base_url('index.php/welcome/profil_bidan') ?>">Profil</a>
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
    <img src="assets/img/logo.jpg" style="width: 100%; height:min-content">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="container">
                    <div class="row">
                        <div class="col order-last">
                            <div class="d-grid gap-2 col-6 mt-2 mb-2">

                                <button class="btn btn-danger" type="button" style="width: 180px; height:200px">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <img src="assets/img/logo.jpg" style="width: 100px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">
                                                    <br>
                                                    <a href="<?php echo base_url('index.php/welcome/format_data') ?>"
                                                        class="btn btn-outline-light">Format Data</a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2 col-6 mt-2 mb-2">

                                <button class="btn btn-warning" type="button" style="width: 180px; height:200px">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <img src="assets/img/logo.jpg" style="width: 100px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">
                                                    <br>
                                                    <a href="<?php echo base_url('index.php/welcome/format_data') ?>"
                                                        class="btn btn-outline-light">Profil Bidan</a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                            </div>
                        </div>
                        <div class="col order-first">
                            <div class="d-grid gap-2 col-6 mt-2 mb-2">

                                <button class="btn btn-primary" type="button" style="width: 180px; height:200px">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <img src="assets/img/logo.jpg" style="width: 100px;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">
                                                    <br>
                                                    <a href="<?php echo base_url('index.php/welcome/layanan') ?>"
                                                        class="btn btn-outline-light">Layanan</a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-2">
                <table class="table table-striped" style="width: 300px;">
                    <thead>
                        <tr class="table-success">
                            <th scope="col"></th>
                            <th scope="col">Metode Kontrasepsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>IMPLAN</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>PIL KB</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>SUNTIKAN</td>
                        <tr>
                            <th scope="row">4</th>
                            <td>IUD/KDR</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2 mt-2">

            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-8">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class=" text-center"><b>Visi</b></h3>
                            <p class="text-justify">
                                Visi dari Poskesdes yaitu tercapainya Desa Sehat, menuju terwujudnya Indonesia Sehat,
                                yakni
                                masyarakat yang hidup dalam lingkungan sehat dengan perilaku sehat, memiliki kemampuan
                                untuk
                                menjangkau pelayanan Kesehatan yang bermutu secara adil dan merata serta memiliki
                                derajat kesehatan
                                yang setinggi – tingginya.
                            </p>
                        </div>
                        <div class="col-6">
                            <h3 class=" text-center"><b>Misi</b></h3>
                            <p class="text-justify">
                                Sebagai tempat pelayanan kesehatan masyarakat khususnya di daerah wilayah sekitar Desa
                                Pakis,mengemban amanah tersebut yang kemudian dicantumkan dalam Misi Polindes Pakis
                                yaitu: <br>1.
                                Menggerakkan pembangunan berwawasan kesehatan di wilayah Desa Pakis.<br> 2. Mendorong
                                kemandirian
                                hidup
                                sehat bagi keluarga dan masyarakat di wilayah Desa Pakis.<br> 3. Memelihara dan
                                meningkatkan,
                                pemeratan
                                dan keterjangkauan pelayanan Kesehatan.<br> 4. Memelihara dan meningkatkan kesehatan
                                perorangan,
                                keluarga dan masyarakat beserta lingkungannya.
                            </p>
                        </div>
                        <p class="text-justify">
                            Berdasarkan Visi dan Misi dari Polindes Desa Kabar di
                            atas, sehingga fungsi dari Polindes Desa Pakis sebagai Pemberi layanan kesehatan yaitu
                            sebagai pusat
                            penggerak berwawasan kesehatan, sebagai pusat pemberdayaan masyarakat, dan sebagai pusat
                            pelayanan
                            kesehatan strata pertama yang meliputi pelayanan kesehatan perorangan dan pelayanan
                            kesehatan
                            masyarakat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <table class="table table-light">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">Galery</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                            <td>
                                <img src="assets/img/logo.jpg" style="width: 112px;">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">

            </div>
            <div class="col-2">
                <h3>Contact Us</h3>

                <div class="card" style="background-color:darkgrey; width:17rem">
                    <!--ditengah-->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email address</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keluhan anda</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2">

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
<div class="card text-center mt-3">
    <div class="card-body" style="background-color: #808080;">
        <h5 class="card-title">Spesial</h5>
        <p class="card-text">Untuk pelayanan lebih nyaman, silahkan datang ke polindes langsung!</p>
        <p><b>BUKA 24 JAM</b></p>
    </div>
</div>

</html>