<?php session_start();
error_reporting(12);
$id = $_SESSION['id'];

if (isset($_GET['logout'])) {
    session_destroy();
} ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayWatch</title>
    <link rel="stylesheet" href="./tools/css/style.css">
    <link rel="stylesheet" href="./tools/css/avatarmenu.scss">
    <!--Box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- JS Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
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
            <a href="./view/SignUp.php" class="btn">Sign UP</a>
        <?php } else { ?><nav>
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                        <img src="./php/functions/image/<?php echo $_SESSION['image']  ?>"  alt="" width="100" height="100">
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
    <!-- Movies -->
    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies container -->
        <div class="movies-container">
            <!-- Box 1 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m1.jpg" alt="">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 2 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m2.jpg" alt="">
                </div>
                <h3>Dunkerk</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 3 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m3.jpg" alt="">
                </div>
                <h3>Batman Vs Superman</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 4 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m4.jpg" alt="">
                </div>
                <h3>John Wick 2</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 5 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m5.jpg" alt="">
                </div>
                <h3>Aquaman</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 6 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m6.jpg" alt="">
                </div>
                <h3>Black Panther</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 7 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m7.jpg" alt="">
                </div>
                <h3>Thor</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 8 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m8.png" alt="">
                </div>
                <h3>Bumblebee</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 9 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m9.jpg" alt="">
                </div>
                <h3>Mortal Engines</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 10 --> 
            <div class="box">
                <div class="box-img">
                    <img src="./tools/img/m10.jpg" alt="">
                </div>
                <h3>UnderWorld Blood Wars</h3>
                <span>120 min | Action</span>
            </div>
        </div>          
    </section>
    <!-- Coming-->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- Coming Container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- Box 1 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming1.jpg" alt="">
                </div>
                <h3>Johny English</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 2 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming2.jpg" alt="">
                </div>
                <h3>Warcraft</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 3 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming3.jpg" alt="">
                </div>
                <h3>Rampage</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 4 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming4.jpg" alt="">
                </div>
                <h3>Iron Lady</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 5 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming5.jpg" alt="">
                </div>
                <h3>Justice League</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 6 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming6.jpeg" alt="">
                </div>
                <h3>Doctor Strange</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 7 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming7.jpg" alt="">
                </div>
                <h3>Captain Marvel</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- Box 8 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming8.jpg" alt="">
                </div>
                <h3>Black Widow</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- Box 9 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming9.jpg" alt="">
                </div>
                <h3>Antman</h3>
                <span>120 min | Action</span>
            </div>
            <!-- Box 10 --> 
            <div class="swiper-slide box">
                <div class="box-img">
                    <img src="./tools/img/coming10.jpg" alt="">
                </div>
                <h3>Guardian of the Galaxy</h3>
                <span>120 min | Action</span>
            </div>
            </div>
        </div>
    </section>
    <!-- Newsletter -->
    <section class="newsletter" id="newsletter">
        <h2>Subscribe To Get <br> Newsletter</h2>
        <form action="">
            <input type="email" class="email" placeholder="Enter Email..." required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>
    <!-- Footer -->
    <section class="footer">
        <a href="#" class="logo">
            <i class='bx bx-movie-play'></i> StayWatch
        </a>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></i></a>
            <a href="#"><i class='bx bxl-linkedin-square' ></i></i></a>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; StayWatch All Right Reserved</p>
    </div>




  <!-- Initialize Swiper -->
  <script type="module" src="./tools/js/main.js">  </script>
  <script src="./tools/js/avatar.js"></script>
</body>
</html>