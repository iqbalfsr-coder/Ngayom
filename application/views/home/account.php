<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('product_list') ?>">Products</a></li>
            <li class="breadcrumb-item active">My Account</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- My Account Start -->
<div class="my-account">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active " id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                    <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Address</a>
                    <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Orders</a>
                    <a class="nav-link" href="<?= base_url('home/logout') ?>"><i class="fa fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                        <h4>Account Details</h4>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" value="<?= $member['id_member']; ?>" name="id_member" hidden>
                                    <input class="form-control" type="text" value="<?= $member['nama_member']; ?>" name="nama_member">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="email" value="<?= $member['email_member']; ?>" name="email_member">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" value="<?= $member['no_hp']; ?>" name="no_hp" placeholder="No Hp">
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="<?= $member['alamat']; ?>" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn" type="submit">Update Account</button>
                                    <br><br>
                                </div>
                            </div>
                        </form>
                        <form action="<?= base_url('home/account_pass') ?>" method="post">
                            <h4>Password change</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" type="password" placeholder="Current Password" id="current_password" name="current_password">
                                    <?= form_error('current_password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" placeholder="New Password" id="new_password1" name="new_password1">
                                    <?= form_error('new_password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" placeholder="Confirm Password" id="new_password2" name="new_password2">
                                    <?= form_error('new_password2', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                        <h4>Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><?= $member['alamat']; ?></p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                    Edit Address
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Address</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('home/account_editadd') ?>" method="post">
                                                <div class="modal-body">
                                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"><?= $member['alamat']; ?></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <?php
                    error_reporting(0);
                    $sortuser  = $member['id_member'];
                    $queryorder = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`img_product`, `t`.`id_order`, `m`.`id_member`,`t`.`qty`, `t`.`transaction_time`, `t`.`status_code`, `t`.`pdf_url`,`t`.`ongkir`,`t`.`gross_amount`,`t`.`sub_total`,`t`.`status_order`,`m`.`nama_member`,`m`.`alamat`,`t`.`resi`,`t`.`estimasi`
                FROM `transaksi` `t`
                JOIN `member` `m` ON `t`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `t`.`id_product` = `p`.`id_product`
                WHERE `m`.`id_member` = $sortuser;
                ";
                    $order = $this->db->query($queryorder)->result_array();
                    ?>
                    <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Panduan Bayar</th>
                                        <th>Detail</th>
                                        <th>Refund</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Button trigger modal -->


                                    <!-- Modal -->

                                    <?php $i = 1; ?>
                                    <?php foreach ($order as $o) : ?>
                                        <tr>
                                            <th scope="row">
                                                <?= ++$start; ?>
                                            </th>
                                            <td><?= $o['nama_product'] ?></td>
                                            <td><?= $o['transaction_time'] ?></td>
                                            <td>Rp. <?= number_format($o['harga']); ?></td>
                                            <td>
                                                <?php if ($o['status_order'] == '0') {
                                                    echo 'Belum Dibayar';
                                                } elseif ($o['status_order'] == '1') {
                                                    echo 'Pesanan Diproses';
                                                } elseif ($o['status_order'] == '2') {
                                                    echo 'Sedang Dikirim';
                                                } elseif ($o['status_order'] == '3') {
                                                    echo 'Pesanan Diterima';
                                                }; ?>
                                            </td>
                                            <td>
                                                <a href="<?= $o['pdf_url'] ?>" target="_blank" class="btn btn_sucess btn-sm">Download</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#order">
                                                    Detail
                                                </button>
                                                <div class="modal fade" id="order" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Order Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card mb-12" style="max-width: auto;">
                                                                    <div class="row no-gutters">
                                                                        <div class="col-md-4">
                                                                            <img src="<?= base_url('assets/img/product/'), $o['img_product']; ?>" class="card-img">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="card-body">
                                                                                <table>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Product
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <?= $o['nama_product']; ?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Qty
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <?= $o['qty']; ?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Sub Total
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>Rp. <?= number_format($o['sub_total']); ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Ongkir
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>Rp. <?= number_format($o['ongkir']); ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Total
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>Rp. <?= number_format($o['gross_amount']); ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Status
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <?php if ($o['status_order'] == '0') {
                                                                                                echo 'Belum Dibayar';
                                                                                            } elseif ($o['status_order'] == '1') {
                                                                                                echo 'Pesanan Diproses';
                                                                                            } elseif ($o['status_order'] == '2') {
                                                                                                echo 'Sedang Dikirim';
                                                                                            } elseif ($o['status_order'] == '3') {
                                                                                                echo 'Sampai Tujuan';
                                                                                            }; ?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Alamat Pengiriman
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Resi
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <?= $o['resi']; ?>

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Nama
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <?= $o['nama_member']; ?>

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Alamat
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td>

                                                                                            <?= $o['alamat']; ?>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            Estimasi Pengiriman
                                                                                        </td>
                                                                                        <td>:</td>
                                                                                        <td><?= $o['estimasi'] . " Hari"; ?></td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($o['status_order'] == '3') {
                                                    echo ' <a href= "' . base_url('home/refund') . '" 
                                                    class="badge badge-danger">Refund Items
                                                    </a>';
                                                } else {
                                                    echo '';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                    <!-- Modal -->

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>