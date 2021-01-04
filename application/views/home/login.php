<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="<?= base_url('assets/eshop/'); ?>img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>lib/slick/slick.css" rel="stylesheet">
    <link href="<?= base_url('assets/eshop/'); ?>lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/eshop/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Start -->
    <div class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="register-form">
                        <div class="row">
                            <div class="col-md-6">
                                <b>New User Signup!</b>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url('home/regis'); ?>" method="POST">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Name" name="nama_member" id="nama_member">
                            </div>
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input class="form-control" type="email" placeholder="E-mail" name="email_member" id="email_member">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="pass_member" id="pass_member">
                            </div>
                            <div class="col-md-12">
                                <button type="submit " class="btn">Register</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Login to your account!</b>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url('home/log'); ?>" method="post">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" placeholder="E-mail" name="email" id="email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn">Login</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

    <!-- Footer Start -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/eshop/'); ?>lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/eshop/'); ?>js/main.js"></script>
</body>

</html>