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
                    <a class="nav-link active " id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Refund</a>
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
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="card mb-12" style="max-width: auto;">
                        <div class="row no-gutters">
                            <?php foreach ($order as $o) : ?>
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
                                            <tr>
                                                <div class="form-group">
                                                    <label for="image">Bukti Refund</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        <?php endforeach; ?>
                                        <button type="button" class="btn btn-primary">
                                            Refund Items
                                        </button>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>
    </div>
</div>