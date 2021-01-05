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
<?php
$sortuser  = $user['id_member'];
$querywish = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`img_product`, `w`.`id_wishlist`, `m`.`id_member`
                FROM `wishlist` `w`
                JOIN `member` `m` ON `w`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `w`.`id_product` = `p`.`id_product`
                WHERE `m`.`id_member` = $sortuser;
                ";
$wish = $this->db->query($querywish)->result_array();
?>
<!-- Wishlist Start -->
<div class="wishlist-page">
    <div class="container-fluid">
        <div class="wishlist-page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <?= $this->session->flashdata('message'); ?>
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
                                <?php foreach ($wish as $w) : ?>
                                    <form action="<?= base_url('home/wishlist'); ?>" method="post">
                                        <input type="text" value="<?= $w['id_product']; ?>" name="id_product" hidden>
                                        <input type="text" value="<?= $w['id_member']; ?>" name="id_member" hidden>
                                        <input type="text" value="<?= $w['harga']; ?>" name="harga" hidden>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?= base_url('assets/img/product/') ?><?= $w['img_product']; ?>" alt="Image"></a>
                                                    <p><?= $w['nama_product']; ?></p>
                                                </div>
                                            </td>
                                            <td><?= $w['harga']; ?></td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1" name="qty">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">
                                                    <button class="btn-cart">
                                                        Add to Cart
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                    </form>
                                    <a href="<?= base_url('home/deletewish/') . $w['id_wishlist']; ?>">
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
        </div>
    </div>
</div>