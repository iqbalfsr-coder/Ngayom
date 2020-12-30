<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title; ?></title>
    <link href="<?= base_url('assets/eshop/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/price-range.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/main.css" rel="stylesheet">
    <link href="<?= base_url('asset/eshop/'); ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?= base_url('assets/eshop/'); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/eshop/'); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/eshop/'); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/eshop/'); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/eshop/'); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="<?= base_url('assets/img/'); ?>logo.png" alt="logo" width="100" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a <?php if ($url == 'akun') {
                                            echo 'class="active"';
                                        } else {
                                            echo '';
                                        } ?> href="<?= base_url('home/akun'); ?>">
                                        <i class="fa fa-user"></i>
                                        Account</a>
                                    <li />
                                <li>
                                    <a <?php if ($url == 'wishlist') {
                                            echo 'class="active"';
                                        } else {
                                            echo '';
                                        } ?> href="<?= base_url('home/wishlist'); ?>">
                                        <i class="fa fa-star"></i>
                                        Wishlist</a>
                                    <li />
                                <li>
                                    <a <?php if ($url == 'checkout') {
                                            echo 'class="active"';
                                        } else {
                                            echo '';
                                        } ?> href="<?= base_url('home/checkout'); ?>">
                                        <i class="fa fa-crosshairs"></i>
                                        Checkout</a>
                                    <li />
                                <li>
                                    <a <?php if ($url == '') {
                                            echo 'class="active"';
                                        } else {
                                            echo '';
                                        } ?> href="<?= base_url('cart'); ?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        Cart</a>
                                    <li />
                                <li>
                                    <a <?php if ($url == 'log') {
                                            echo 'class="active"';
                                        } else {
                                            echo '';
                                        } ?> href="<?= base_url('home/log'); ?>">
                                        <i class="fa fa-lock"></i>
                                        Login</a>
                                    <li />
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html" class="active">Cart</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>