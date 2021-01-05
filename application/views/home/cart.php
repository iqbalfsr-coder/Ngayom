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
error_reporting(0);
$sortuser  = $user['id_member'];
$querycart = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`img_product`, `c`.`id_cart`, `m`.`id_member`,`c`.`qty`
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
                            <?= $this->session->flashdata('message'); ?>
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
                                <?php foreach ($cart as $c) : ?>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="#"><img src="<?= base_url('assets/img/product/') ?><?= $c['img_product']; ?>" alt="Image"></a>
                                                <p><?= $c['nama_product']; ?></p>
                                            </div>
                                        </td>
                                        <td>Rp. <?= number_format($c['harga']); ?></td>
                                        <td>
                                            <?= $c['qty']; ?>
                                        </td>
                                        <td>Rp. <?= number_format($c['harga'] * $c['qty']); ?></td>
                                        <td>
                                            <a href="<?= base_url('home/deletecart/') . $c['id_cart']; ?>">
                                                <button>
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            $sortuser  = $user['id_member'];
            $querytot = "Select sum(sub_total) FROM cart
            WHERE id_member = $sortuser;
            ";
            $total = $this->db->query($querytot)->row_array();
            ?>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Cart Summary</h1>
                                    <p>Sub Total<span>Rp. <?= number_format($total["sum(sub_total)"]); ?></span></p>
                                    <h2>Grand Total<span>Rp. <?= number_format($total["sum(sub_total)"]); ?></span></h2>
                                </div>
                                <div class="cart-btn">
                                    <form action="<?= base_url('checkout') ?>" method="post">
                                        <center>
                                            <button class="btn" type="submit">Checkout</button>
                                        </center>

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