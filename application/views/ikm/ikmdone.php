<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/cssIKM/style.css') ?>">

    <title>IKM</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-danger text-white">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-2 col-3 col_imgs">
                    <a href="<?= base_url('survey'); ?>">
                        <img src="<?php echo base_url('assets/imgIKM/poldabali.png') ?>" width="125" height="125" class="img-fluid polda">
                    </a>
                </div>
                <div class="col-lg-8 col-6 text-res">
                    <a href="<?= base_url('survey'); ?>">
                        <h1 class="display-7" style="color: white;"> <b>INDEKS KEPUASAN MASYARAKAT
                                <br> DITRESNARKOBA POLDA BALI </b>
                        </h1>
                    </a>
                </div>
                <div class="col-lg-2 col-3 col_imgs">
                    <a href="<?= base_url('survey'); ?>">
                        <img src="<?php echo base_url('assets/imgIKM/narkoba1.png') ?>" class="img-fluid narkobagambar ">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php

    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
            <div class="col-md-auto">
                <div class="alert alert-success" role="alert">
                    Terima Kasih, Polling Anda Telah Berhasil Tersimpan!
                </div>
            </div>
            <div class="col col-lg-2">
            </div>
        </div>
        <div class="row text-center  box_container">
            <div class="col-md-4 box_btn">
            </div>

            <div class="col-md-4 box_btn1">
                <div class="bg-success box text-white box1">
                    <div class="row kotak1">
                        <div class="col-12 btn_img_">
                            <a href="<?= base_url('survey'); ?>" title="tekan tombol ini untuk kembali ke halaman utama">
                                <img src="<?php echo base_url('assets/imgIKM/back.png') ?>" class="img-emot">
                            </a>
                        </div>
                        <div class="col-12">
                            <br>
                            <h5>KEMBALI</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 box_btn">
            </div>

        </div><?php ?>
        <!-- Akhir Row -->
    </div>
    <!-- Akhir Container -->
    <footer class="bg-danger text-center text-white mt-3 bt-2 pb-2">

        <br>
        <!-- Current Date -->
        <input style="text-align:center;" type="text" id="currentDate">
        <br><br>
        <script>
            var today = new Date();
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            document.getElementById("currentDate").value = date;
        </script>
        <!-- Current Time -->
        <input style="text-align:center;" type="text" id="currentTime">
        <br><br>
        <script>
            var today = new Date();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            document.getElementById("currentTime").value = time;
        </script>

        <span>Copyright &copy; Polda Bali <?= date('Y'); ?></span>
    </footer>

</body>

</html>