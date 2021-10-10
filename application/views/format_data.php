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
    <div class="container mb-5">
        <br>
        <h1 class="text-center">Format Laporan Polindes</h1>
        <a href="<?php echo base_url('index.php/welcome/daftar_kunjungan') ?>" class="btn btn-outline-success mt-2"
            style="width: 100%;">Daftar
            Kunjungan</a>
        <a href="<?php echo base_url('index.php/welcome/kartu_ibu') ?>" class="btn btn-outline-success mt-2"
            style="width: 100%;">Kartu Ibu</a>
        <a href="<?php echo base_url('index.php/welcome/rekapitulasi_pws') ?>" class="btn btn-outline-success mt-2"
            style="width: 100%;">Rekapitulasi PWS Ibu-KIA</a>
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