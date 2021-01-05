<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product_list') ?>">Products</a></li>
            <li class="breadcrumb-item active">Product Detail</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-detail-top">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="product-slider-single normal-slider">
                                <img src="<?= base_url('assets/img/product/') ?><?= $product['img_product'] ?>" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form class="user" action="<?= base_url('home/product_detail'); ?>" method="post">
                                <input type="text" name="id_product" id="id_produk" value="<?= $product['id_product'] ?>" hidden>
                                <input type="text" name="id_member" id="id_member" value="<?= $user['id_member'] ?>" hidden>
                                <div class="product-content">
                                    <div class="title">
                                        <h2><?= $product['nama_product'] ?></h2>
                                    </div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <h4>Price:</h4>
                                        <p>Rp. <?= number_format($product['harga']); ?></p>
                                    </div>
                                    <div class="quantity">
                                        <h4>Quantity:</h4>
                                        <div class="qty">
                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <button class="btn"><i class="fa fa-heart"></i>Add to Wislist
                                        </button>
                                        <a class="btn" href="<?= base_url('home/cart') ?>"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4>Product description</h4>
                                <p>
                                    <?= $product['desk_product'] ?>
                                </p>
                            </div>
                            <div id="reviews" class="container tab-pane fade">
                                <div class="reviews-submitted">
                                    <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                                <div class="reviews-submit">
                                    <h4>Give your Review:</h4>
                                    <div class="ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="row form">
                                        <div class="col-sm-12">
                                            <textarea placeholder="Review"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="section-header">
                        <h1>Related Products</h1>
                    </div>
                    <?php
                    $id_kategori = $product['id_kategori'];
                    $querykategori = "SELECT `k`.`id_kategori`, `k`.`nama_kategori`, `p`.`nama_product`, `p`.`id_product`, `p`.`img_product`, `p`.`harga`
                            FROM `kategori` `k`
                            JOIN `product` `p` 
                            ON `k`.`id_kategori` = $id_kategori
                            WHERE `p`.`id_kategori` = $id_kategori
                            ";
                    $kat = $this->db->query($querykategori)->result_array();
                    ?>

                    <div class="row align-items-center product-slider product-slider-3">
                        <?php foreach ($kat as $ka) : ?>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?= $ka['nama_product']; ?></a>
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
                                            <img src="<?= base_url('assets/img/product/') ?><?= $ka['img_product']; ?>" alt="Product Image" height="500px">
                                        </a>
                                        <div class="product-action">
                                            <a href="<?= base_url('home/product_detail/') . $ka['id_product']; ?>"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><?= $ka['harga']; ?></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <?php foreach ($kategori as $k) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home/product_list/') . $k['id_kategori']; ?>"><i class="<?= $k['icon']; ?>"></i><?= $k['nama_kategori']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Detail End -->