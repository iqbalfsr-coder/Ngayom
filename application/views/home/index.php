<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <center>
                                <h4>
                                    <b>Category</b>
                                </h4>
                            </center>

                        </li>

                        <?php foreach ($kategori as $k) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/product_list') ?>"><?= $k['nama_kategori']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    <div class="header-slider-item">
                        <img src="<?= base_url('assets/eshop/') ?>img/slider-1.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="<?= base_url('assets/eshop/') ?>img/slider-2.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                    <div class="header-slider-item">
                        <img src="<?= base_url('assets/eshop/') ?>img/slider-3.jpg" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>Some text goes here that describes the image</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="<?= base_url('assets/eshop/') ?>img/category-1.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="<?= base_url('assets/eshop/') ?>img/category-2.jpg" />
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/nike.png" alt="" width="100px"></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/adidas.png" alt="" width="100px"></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->


<!-- Category Start-->
<div class="category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-3.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-250">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-4.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
                <div class="category-item ch-150">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-5.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-150">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-6.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
                <div class="category-item ch-250">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-7.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-item ch-400">
                    <img src="<?= base_url('assets/eshop/') ?>/img/category-8.jpg" />
                    <a class="category-name" href="">
                        <p>Some text goes here that describes the image</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category End-->


<!-- Featured Product Start -->
<div class="featured-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Featured Product</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            <?php foreach ($product as $p) : ?>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#"><?= $p['nama_product']; ?></a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="<?= base_url('assets/img/product/') ?><?= $p['img_product']; ?>" alt="Product Image" height="500px">
                            </a>
                            <div class="product-action">
                                <a href="<?= base_url('home/product_detail/') . $p['id_product']; ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><?= $p['harga']; ?></h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Featured Product End -->