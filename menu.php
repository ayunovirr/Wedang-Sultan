<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <nav class="mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./menu.php">Menu</a></li>
                                <li><a href="./blog.php">News</a></li>
                                <li><a href="./loct.php">Location</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                                <li class="search-btn search-trigger"><i class="fa fa-search"></i></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Search Bar Begin -->
    <section class="search-bar-wrap">
        <span class="search-close"><i class="fa fa-close"></i></span>
        <div class="search-bar-table">
            <div class="search-bar-tablecell">
                <div class="search-bar-inner">
                    <h2>Search</h2>
                    <form action="#">
                        <input type="search" placeholder="Type Keywords">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Bar End -->
    <!-- Top Social Begin -->
    <div class="top-social">
        <div class="top-social-links">
            <ul>
                <li><a href="https://www.instagram.com/wedangsultan/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- Top Social End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-area set-bg" data-setbg="img/header-menu.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2>Drinks</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Classes Section Begin -->
    <section class="classes-section">
        <div class="container">
            <div class="row">
			
			<?php
				include 'koneksi.php';
				$query = mysqli_query($konek, "select * from menu");
                while ($data=mysqli_fetch_array($query))
            	{
            ?>
                <div class="col-md-4 col-sm-6">
                    <div class="single-classes">
                        <div class="classes-img">
                            <img src="img/menu/<?php echo $data['photo'];?>" alt="">
                        </div>
                        <div class="classes-text">
                            <h5><?php echo $data['nama'];?></h5>
                            <p><?php echo $data['caption'];?></p>
							<p><?php echo $data['harga'];?></p>
                        </div>
                    </div>
                </div>
				
				<?php } ?>
                
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./menu.php">Menu</a></li>
                                <li><a href="./blog.php">News</a></li>
                                <li><a href="./loct.php">Location</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <a href="https://www.instagram.com/wedangsultan/"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
</body>

</html>