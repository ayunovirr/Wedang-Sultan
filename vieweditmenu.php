<?php
    include 'koneksi.php';
    session_start();
    if(empty($_SESSION['username']))
    {
        header("location:formlogin.php?pesan=belum_login");
    }
	
	include 'koneksi.php';
	$id = $_GET["id"];
	$query = mysqli_query($konek, "select * from menu WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu</title>

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
                                <li><a href="./admin.php">Home</a></li>
                                <li><a href="./menuadmin.php">Menu</a></li>
                                <li><a href="./blogadmin.php">News</a></li>
                                <li><a href="./ViewMessage.php">Message</a></li>
								<li><a href="./logout.php">Logout</a></li>
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
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-area set-bg" data-setbg="img/header-about.png">
    </section>
    <!-- Breadcrumb Section End -->
	
    <!-- Classes Section Begin -->
	<br><br>
	<div class="container">
	<h3>Edit Menu</h3>
	<br>
	<div class="row">
	<div class="col-md-4">
	<form method="post" action="editmenu.php">
		<?php while ($data=mysqli_fetch_array($query))
            	{ ?>
			<div class="form-group row">
				<input type="hidden" name="id" value="<?=$data['id'];?>">
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="nama" value="<?=$data['nama'];?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Caption</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="caption" value="<?=$data['caption'];?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="harga" value="<?=$data['harga'];?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
				<input type="file" class="form-control" name="photo"value="<?=$data['photo'];?>">
				</div>
			</div>
		<input type="submit" name="submit" value="Submit">
		<br><br>
				<?php } ?>
	</form>
    <!-- Classes Section End -->

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