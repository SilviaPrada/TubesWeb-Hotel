<?php
include 'assets/koneksi.php';
$data = $kamar -> getData(4);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo3.jpg">
    <title>Rooms | Grand Vacation Hotel</title>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <?php include 'assets/header.php'; ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Kamar Kami</h1>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Kamar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Rooms Section Begin -->
    <section class="rooms spad">
        <div class="container">
            <?php 
            $i = 0;
            foreach ($data as $d) {
                $idKamar = $d['idKamar'];
                $querygambar = mysqli_query($conn, "SELECT gambarKamar FROM gambarkamar WHERE idKamar = $idKamar");
                if ($i % 2 == 1) { 
            ?>

            <div class="row">
                <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                    <?php
                    while($row = mysqli_fetch_assoc($querygambar)){
                    ?>
                        <div class="room__pic__item set-bg" data-setbg="img/rooms/<?php echo $row['gambarKamar']?>"></div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                    <div class="room__text">
                        <h3><?=$d['namaKamar']?></h3>
                        <h2><sup>Rp</sup><?=$kamar->getRupiahFormat($d['hargaKamar'])?><span>/hari</span></h2>
                        <ul>
                            <li><span>Size:</span><?=$d['ukuranKamar']?> ft</li>
                            <li><span>Capacity:</span>Max person <?=$d['kapasitasKamar']?></li>
                            <li><span>Bed:</span><?=$d['kasurKamar']?></li>
                            <li><span>View:</span><?=$d['pemandanganKamar']?></li>
                        </ul>
                        <a href="#">View Details</a>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="row">
                <div class="col-lg-6 p-0 order-lg-3 order-md-3 col-md-6">
                    <div class="room__pic__slider owl-carousel"><
                    <?php
                    while($row = mysqli_fetch_assoc($querygambar)){
                    ?>
                        <div class="room__pic__item set-bg" data-setbg="img/rooms/<?php echo $row['gambarKamar']?>"></div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-4 order-md-4 col-md-6">
                    <div class="room__text right__text">
                        <h3><?=$d['namaKamar']?></h3>
                        <h2><sup>Rp</sup><?=$kamar->getRupiahFormat($d['hargaKamar'])?><span>/hari</span></h2>
                        <ul>
                            <li><span>Size:</span><?=$d['ukuranKamar']?> ft</li>
                            <li><span>Capacity:</span>Max person <?=$d['kapasitasKamar']?></li>
                            <li><span>Bed:</span><?=$d['kasurKamar']?></li>
                            <li><span>View:</span><?=$d['pemandanganKamar']?></li>
                        </ul>
                        <a href="#">View Details</a>
                    </div>
                </div>
            </div>
            <?php } 
            $i++; 
            }?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__number">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <?php include 'assets/footer.php' ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>