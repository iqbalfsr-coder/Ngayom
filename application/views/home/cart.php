<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product_list') ?>">Products</a></li>
            <li class="breadcrumb-item active">Cart</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
<?php
$sortuser  = $user['id_member'];
$querycart = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`
                FROM `cart` `c`
                JOIN `member` `m` ON `c`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `c`.`id_product` = `p`.`id_product`
                WHERE `m`.`id_member` = $sortuser;
                ";
$cart = $this->db->query($querycart)->result_array();
?>
<!-- Cart Start -->
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td>
                                        <div class="img">
                                            <a href="#"><img src="<?= base_url('assets/eshop/') ?>img/product-1.jpg" alt="Image"></a>
                                            <p>Product Name</p>
                                        </div>
                                    </td>
                                    <td>$99</td>
                                    <td>
                                        <div class="qty">
                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>$99</td>
                                    <td><button><i class="fa fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Cart Summary</h1>
                                    <p>Sub Total<span>$99</span></p>
                                    <p>Shipping Cost<span>$1</span></p>
                                    <h2>Grand Total<span>$100</span></h2>
                                </div>
                                <div class="cart-btn">
                                    <form action="<?= base_url('checkout') ?>" method="post">
                                        <button>Update Cart</button>
                                        <button type="submit">Checkout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->