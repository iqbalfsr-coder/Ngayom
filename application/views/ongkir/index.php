<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="<?= base_url('assets/eshop/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/price-range.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/main.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>css/responsive.css" rel="stylesheet">
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
                                <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                                <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
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
    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/one.png" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/two.png" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="<?= base_url('assets/eshop/'); ?>images/cart/three.png" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>$59</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">$59</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area ">
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Provinsi:</label>
                                <select name="provinsi">

                                </select>

                            </li>
                            <li class="single_field">
                                <label>Kota/Kabupaten</label>
                                <select name="kabupaten">

                                </select>

                            </li>
                            <li class="single_field">
                                <label>Kurir</label>
                                <select name="kurir">

                                </select>

                            </li>
                            <li class="single_field">
                                <label>Paket</label>
                                <select name="paket">

                                </select>

                            </li>
                            <input type="text" name="total_berat" value="1200" hidden>
                            <input type="text" name="pro">
                            <input type="text" name="kabu">
                            <input type="text" name="type">
                            <input type="text" name="kodepos">
                            <input type="text" name="kur">
                            <input type="text" name="pa">
                            <input type="text" name="ong">
                            <input type="text" name="est">
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>$59</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$61</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

    <footer id="footer">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privecy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Ngayom</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-2">
                        <div class="single-widget">
                            <br>
                            <img src="<?= base_url('assets/img/') ?>logo.png" alt="logo" width="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p>
                        <center>Copyright © 2020 Ngayom Inc. All rights reserved.</center>
                    </p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="<?= base_url('assets/eshop/'); ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>js/main.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'post',
                url: 'http://localhost/Ngayom/ongkir/datap',
                success: function(hasil_pro) {
                    $("select[name=provinsi]").html(hasil_pro);
                }
            });

            $("select[name=provinsi]").on("change", function() {
                var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
                $.ajax({
                    type: 'post',
                    url: 'http://localhost/Ngayom/ongkir/datak',
                    data: 'id_provinsi=' + id_provinsi_terpilih,
                    success: function(hasil_kota) {
                        $("select[name=kabupaten]").html(hasil_kota);
                    }
                })
            });

            $.ajax({
                type: 'post',
                url: 'http://localhost/Ngayom/ongkir/datae',
                success: function(hasil_kurir) {
                    $("select[name=kurir]").html(hasil_kurir);
                }
            })

            $("select[name=kurir]").on("change", function() {
                var kurir_terpilih = $("select[name=kurir]").val();
                var kab_terpilih = $("option:selected", "select[name=kabupaten]").attr("id_kab");
                var total_berat = $("input[name=total_berat]").val();
                $.ajax({
                    type: 'post',
                    url: 'http://localhost/Ngayom/ongkir/datapa',
                    data: 'kurir=' + kurir_terpilih + '&kabupaten=' + kab_terpilih + '&berat=' + total_berat,
                    success: function(hasil_paket) {
                        $("select[name=paket]").html(hasil_paket);

                        $("input[name=kur]").val(kurir_terpilih);
                    }
                })
            });

            $("select[name=kabupaten]").on("change", function() {
                var prov = $("option:selected", this).attr("nama_provinsi");
                var kot = $("option:selected", this).attr("nama_kota");
                var tip = $("option:selected", this).attr("tipe");
                var kopos = $("option:selected", this).attr("kodepos");

                $("input[name=pro]").val(prov);
                $("input[name=kabu]").val(kot);
                $("input[name=type]").val(tip);
                $("input[name=kodepos]").val(kopos);
            })

            $("select[name=paket]").on("change", function() {
                var pa = $("option:selected", this).attr("paket");
                var ong = $("option:selected", this).attr("ongkir");
                var est = $("option:selected", this).attr("etd");

                $("input[name=pa]").val(pa);
                $("input[name=ong]").val(ong);
                $("input[name=est]").val(est);
            })
        });
    </script>
</body>

</html>