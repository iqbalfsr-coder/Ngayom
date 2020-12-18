<section id="form">
    <!--form-->
    <div class="container">
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
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('home/regis'); ?>" method="POST">
                        <input type="text" placeholder="Name" name="name" id="name" />
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="email" placeholder="Email Address" name="email" id="email" />
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <input type="password" placeholder="Password" name="password" id="password" />
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->
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