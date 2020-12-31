<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product') ?>">Products</a></li>
            <li class="breadcrumb-item active">Wishlist</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Wishlist Start -->
<div class="wishlist-page">
    <div class="container-fluid">
        <div class="wishlist-page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Add to Cart</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td>
                                        <div class="img">
                                            <a href="#"><img src="<?= base_url('assets/eshop/') ?>img/product-6.jpg" alt="Image"></a>
                                            <p>Product Name</p>
                                        </div>
                                    </td>
                                    <td>$99</td>
                                    <td>
                                        <div class="qty">
                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td><button class="btn-cart">Add to Cart</button></td>
                                    <td><button><i class="fa fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>