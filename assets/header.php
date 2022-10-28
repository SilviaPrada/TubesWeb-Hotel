<?php
session_start();
if(isset($_SESSION["iduser"])) {
$user = $_SESSION["namauser"];
$tampilan = 
    '<div class="header__top__language">
        <img src="img/ind.png" alt="">
        <span>'. $user .'</span>
        <i class="fa fa-angle-down"></i>
        <ul>
            <li><a href="pesanan.php">Pesanan</a></li>
            <li><a href="logout.php"><Logout class="fa fa-sign-out">Logout</i></a></li>
        </ul>
    </div>';
$tampilanmobile = '<div class="offcanvas__language">
<img src="img/ind.png" alt="">
        <span>'. $user .'</span>
        <i class="fa fa-angle-down"></i>
        <ul>
            <li><a href="pesanan.php">Pesanan</a></li>
            <li><a href="logout.php"><Logout class="fa fa-sign-out">Logout</i></a></li>
        </ul>
</div>';
} else {
$tampilan = "<div class='header__top__auth'>
    <ul><li><a href='./login.php'>Login</a></li><li><a href='./register.php'>Register</a></li></ul>
    </div>";
$tampilanmobile = '<div class="offcanvas__auth">
<ul>
    <li><a href="./login.php">Login</a></li>
    <li><a href="">Register</a></li>
</ul>
</div>';
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <title>Header</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html">
                <img src="img/logo4.jpg"
                alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn__widget">
            <a href="#">Book Now <span class="arrow_right"></span></a>
        </div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> 10 Raya Legian St., Denpasar, Indonesia</li>
                <li><span class="icon_phone"></span> (+62) 361-76-3463</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="img/ind.png" alt="">
            <span>Indonesia</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li>Indonesia</li>
                <li>English</li>
            </ul>
        </div>
        <?php echo $tampilanmobile; ?>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> 10 Raya Legian St., Denpasar, Indonesia</li>
                            <li><span class="icon_phone"></span> (+62) 361-76-3463</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <?php echo $tampilan; ?>
                            <div class="header__top__language">
                                <img src="img/ind.png" alt="">
                                <span>Indonesia</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li>Indonesia</li>
                                    <li>English</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo4.jpg" alt=""></a>
                        </div>
                    </div>
                    <?php
                        $activePage = basename($_SERVER['PHP_SELF']);
                        $index = "";
                        $rooms = "";
                        $about = "";
                        $room_details = "";
                        $blog_detals = "";
                        $blog = "";
                        $contact = "";
                        switch ($activePage){
                            case "index.php":
                                $index = "active";
                                break;
                            case "rooms.php":
                                $rooms = "active";
                                break;
                            case "about.php":
                                $about = "active";
                                break;
                            case "room-details.php":
                                $room_details = "active";
                                break;
                            default:
                            "";
                            break;
                        }
                    ?>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li class="<?php echo $index ?>"><a href="./index.php">Home</a></li>
                                    <li class="<?php echo $rooms ?>"><a href="./rooms.php">Kamar</a></li>
                                    <li class="<?php echo $about ?>"><a href="./about.php">Tentang</a></li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </nav>
                            <div class="header__nav__widget">
                                <a href="pesan.php">Pesan Sekarang <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
</body>

</html>