<?php session_start();
error_reporting(12);
$id = $_SESSION['id'];

if (isset($_GET['logout'])) {
    session_destroy();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayWatch</title>
    <link rel="stylesheet" href="./tools/css/style.css  ">
    <link rel="stylesheet" href="./tools/css/avatarmenu.scss  ">
    <!--Box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- JS Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i> StayWatch
        </a>

        <!-- Menu-->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#coming">Coming</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
        <?php if (empty($id)) { ?>
            <a href="./view/SignIn.php" class="btn">Sign In</a>
        <?php } else { ?><nav>
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="./php/functions/image/<?php echo $_SESSION['image']  ?>" alt="" width="100" height="100">
                    </div>

                    <div class="menu">
                        <h3>
                            Welcome Back !
                            <div>
                                <?php echo $_SESSION['name'] ?>
                            </div>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">My Profile</a>
                            </li>
                            <li>
                                <a href="index.php?logout=<?php echo $id; ?>">Logout </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        <?php } ?>
    </header>
    <!-- Home -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!-- Box 1-->
            <div class="swiper-slide container">
                <img src="./tools/img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br> Be Carnage</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- Box 2-->
            <div class="swiper-slide container">
                <img src="./tools/img/home2.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br> Infinity War</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <!-- Box 3-->
            <div class="swiper-slide container">
                <img src="./tools/img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br> Far From Home</h1>
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </section>
    <!-- Movies-->
    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
    </section>

    <!-- Initialize Swiper -->
    <script type="module" src="./tools/js/main.js">


    </script>
    <script src="./tools/js/avatar.js"></script>
</body>

</html>