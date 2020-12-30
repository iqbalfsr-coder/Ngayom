<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
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
        <section id="form">
            <!--form-->
            <div class="container">
                <center>
                    <img src="<?= base_url('assets/img/logo.png'); ?>" width="200px" alt="logo">
                </center>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form">
                            <!--login form-->
                            <h2>Login to your account</h2>
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('home/log'); ?>" method="post">
                                <input type="email" placeholder="Email Address" name="email" id="email" />
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                <input type="password" placeholder="Password" name="password" id="password" />
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div>
                        <!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form">
                            <!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form action="<?= base_url('home/regis'); ?>" method="POST">
                                <input type="text" placeholder="Name" name="name" id="name" />
                                <input type="email" placeholder="Email Address" name="email" id="email" />
                                <input type="password" placeholder="Password" name="password" id="password" />
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div>
                        <!--/sign up form-->
                    </div>
                </div>
            </div>
        </section>