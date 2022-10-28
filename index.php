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
    <title>Grand Vacation | Hotel </title>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?php include 'assets/header.php'; ?>
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="https://source.unsplash.com/featured/?hotel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h5>SELAMAT DATANG</h5>
                        <h2>Rasakan pengalaman tak terlupakan selama liburan</h2>
                    </div>
                    <form action="pesan.php" method="GET" class="filter__form">
                        <div class="filter__form__item filter__form__item--search">
                            <p>Lokasi</p>
                            <div class="filter__form__input">
                                <input type="text" placeholder="Search Location">
                                <span class="icon_search"></span>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Check In</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Check Out</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__out">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Tamu</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select>
                                    <option value="">2 Orang Dewasa, 1 Anak</option>
                                    <option value="">2 Orang Dewasa</option>
                                    <option value="">1 Orang Dewasa</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit">PESAN SEKARANG</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h5>TENTANG KAMI</h5>
                            <h2>Selamat Datang di Grand Vacation Hotel</h2>
                        </div>
                        <p class="first-para">Ajak keluarga Anda bermalam di hotel kami. Dengan berbagai fasilitas yang sangat berkualitas
                        sangat memanjakan tamu yang datang. Lokasi yang sangat strategis, dekat berbagai tempat wisata, tempat perbelanjaan, tempat ibadah dan lain-lain.</p>
                        <p class="last-para">Untuk tamu yang sedang Honey Moon dapatkan diskon besar-besaran dengan cara memesan paket spesial dari kami. Pengalaman
                        tak terlupakan akan sangat berkesan jika Anda menginap di Grand Vacation Hotel. Kunjungi segera sebelum kehabisan.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home__about__pic">
                        <img src="img/home-about/home-about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h4>Wi-Fi gratis</h4>
                        <p>Fasilitas wifi gratis disediakan untuk memberi kenyamanan para tamunya dengan kecepatan akses internet yang sangat cepat
                        pastinya akan membuat penghuni hotel kami pasti nyaman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h4>Kolam Renang Premium</h4>
                        <p>Disediakan untuk tamu yang memsan paket spesial dari kami. Tidak semua tamu bisa menggunakan layanan kolam renang premium kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-3.png" alt="">
                        <h4>Mesin Kopi</h4>
                        <p>Untuk tamu hotel, kami sediakan mesin kopi untuk Anda yang gemar menikmati kopi. Dengan seduhan yang menggugah
                        selera pastinya membuat Anda dan keluarga nyaman di hotel kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.png" alt="">
                        <h4>Bar</h4>
                        <p>Fasilitas bar, khusus untuk pengunjung hotel kami. Dengan segala minuman sudah disediakan pastinya membuat Anda
                        dan pasangan Anda betah.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-5.png" alt="">
                        <h4>TV Resolusi Tinggi</h4>
                        <p>Yang suka menonton film, di hotel kami sediakan TV dengan resolusi tinggi diperuntuk semua tamu dari berbagai kamar
                        sudah tersedia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-6.png" alt="">
                        <h4>Restoran</h4>
                        <p>Hotel kami sudah disediakan restaurant berbintang, dengan berbagai masakan khas Indonesia pastinya ada dengan sajian 
                        yang berbeda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="home-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>KAMAR KAMI</h5>
                        <h2>Ketahui kamar hotel kami</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php
                    foreach($data as $d){
                        $idKamar = $d['idKamar'];
                        $querygambar = mysqli_query($conn, "SELECT gambarKamar FROM gambarkamar WHERE idKamar = $idKamar ORDER BY RAND() LIMIT 1");
                        $gambar = mysqli_fetch_array($querygambar);
                    ?>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="home__room__item set-bg"
                        data-setbg="img/rooms/<?php echo rawurlencode($gambar['gambarKamar']);?>">
                        <div class="home__room__title">
                            <h4><?=$d['namaKamar']?></h4>
                            <h2><sup>Rp </sup><?=$kamar->getRupiahFormat($d['hargaKamar'])?><span>/hari</span></h2>
                        </div>
                        <a href="#">Booking Now</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="home__explore">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3>Diskon khusus untuk tamu baru! Periksa Sekarang!</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <a href="#" class="primary-btn">Explorer More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__pic">
                        <img src="https://source.unsplash.com/featured/?person" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__text">
                        <div class="section-title">
                            <h5>Testimonials</h5>
                            <h2>What do customers say about us?</h2>
                        </div>
                        <div class="testimonial__slider__content">
                            <div class="testimonial__slider owl-carousel">
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Ribuan orang telah berkunjung di Grand Vacation Hotel kami, dengan rasa puas setelah merasakan 
                                    segala fasilitas yang ada. Pastinya membuat orang betah bermalam dengan view yang sangat indah. Temukan diskon besar-besaran
                                    dengan pasangan Anda.</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Ridchard Houston</h5>
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Pengunjung kami bukan dari Indonesia saja, dari berbagai negara sudah pernah bermalam di hotel kami.
                                    Bahkan artis papan atas pun pernah berkunjung kesini. Yuk buruan pesan sekarang!</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>John Smith</h5>
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Apalagi pada musim liburan seperti ini. Banyak promo besar-besaran dan segala layanan akan kami berikan
                                    kepada Anda untuk tamu Grand Vacation Hotel. Ribuan orang sudah merasakannya lhooo. Kamu kapan?</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Jack Kelly</h5>
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__item">
                                    <h5>Detailed Review:</h5>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Wisata yang sangat beragam di Bali pastinya memerlukan hunian sementara untuk keluarga atau pasangan Anda.
                                    Ingin mencari hotel maupun dengan fasilitas yang berkelas dan bikin nyaman. Yuk Kunjungi Grand Vacation Hotel. Lokasi sangat strategis. Buruan sebelum kehabisan tempat!</p>
                                    <div class="testimonial__author">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__title">
                                                    <h5>Richard Hobson</h5>
                                                    <span>Director</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="testimonial__author__social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-num" id="snh-1"></div>
                            <div class="slider__progress"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Chooseus Section Begin -->
    <div class="chooseus spad set-bg" data-setbg="img/chooseus-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h5>MENGAPA MEMILIH KAMI</h5>
                            <h2>Hubungi kami untuk mengetahui penawaran terbaik untuk perjalanan anda</h2>
                        </div>
                        <a href="pesan.php" class="primary-btn">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chooseus Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery spad">
        <div class="gallery__text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="section-title">
                            <h5>Galeri Kami</h5>
                            <h2>Temukan sudut pandang terbaik dari hotel kami</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="gallery__title">
                            <p>Lihat galeri kami, umtuk membuat Anda percaya pada layanan kami!</p>
                            <a href="#" class="primary-btn">Lihat Galeri <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__slider owl-carousel">
            <div class="gallery__item small__item set-bg" data-setbg="img/gallery/gallery-1.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-2.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-3.jpg"></div>
            <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-4.jpg"></div>
        </div>
    </section>
    <br>
    <!-- Gallery Section End -->

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