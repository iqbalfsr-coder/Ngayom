<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('home/product_list') ?>">Products</a></li>
            <li class="breadcrumb-item active">Product List</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-search">
                                        <input type="text" placeholder="Search">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($product as $p) : ?>
                        <div class="col-md-4">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="<?= base_url('product') ?>"><?= $p['nama_product']; ?></a>
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


                <!-- Pagination Start -->
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Start -->
            </div>

            <!-- Side Bar Start -->
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
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product List End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-1.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="<?= base_url('assets/eshop/') ?>img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->