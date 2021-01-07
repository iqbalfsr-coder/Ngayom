<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Order</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <?php
    error_reporting(0);
    $queryorder = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`img_product`, `t`.`id_order`, `m`.`id_member`,`t`.`qty`, `t`.`transaction_time`, `t`.`status_code`, `t`.`pdf_url`,`t`.`ongkir`,`t`.`gross_amount`,`t`.`sub_total`,`t`.`status_order`,`m`.`nama_member`,`m`.`alamat`,`t`.`kurir`,`t`.`paket`,`t`.`estimasi`,`t`.`resi`
                FROM `transaksi` `t`
                JOIN `member` `m` ON `t`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `t`.`id_product` = `p`.`id_product`
                where `status_order` = 0
                ";
    $order = $this->db->query($queryorder)->result_array();
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Order</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Order</th>
                            <th>Nama Pembeli</th>
                            <th>Tanggal</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Ongkir</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($order as $m) : ?>
                            <tr>
                                <th scope="row">
                                    <?= $i; ?>
                                </th>
                                <td><?= $m['id_order']; ?></td>
                                <td><?= $m['nama_member']; ?></td>
                                <td><?= $m['transaction_time']; ?></td>
                                <td><?= $m['nama_product']; ?></td>
                                <td><?= $m['qty']; ?></td>
                                <td><?= $m['sub_total']; ?></td>
                                <td><?= $m['ongkir']; ?></td>
                                <td><?= $m['gross_amount']; ?></td>
                                <td><?php if ($m['status_order'] == '0') {
                                        echo ' <a href="" class="badge badge-danger">Belum Bayar</a>';
                                    } else if ($m['status_order'] == '1') {
                                        echo ' <a href="" class="badge badge-success">Pesanan Diproses</a>';
                                    } else if ($m['status_order'] == '2') {
                                        echo ' <a href="" class="badge badge-success">Pesanan Dikirim</a>';
                                    } else if ($m['status_order'] == '4') {
                                        echo ' <a href="" class="badge badge-success">Pesanan Diterima</a>';
                                    } ?></td>
                                <td>
                                    <form action="<?= base_url('admin/editpes/') . $m['id_order']; ?>" method="post">
                                        <input type="text" name="id_order" id="id_order" value="<?= $m['id_order']; ?>" hidden>
                                        <input type="text" name="status_order" id="status_order" value="1" hidden>
                                        <button type="submit" class="btn btn-primary">
                                            Packing Order
                                        </button>
                                    </form>
                                    <br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                        View
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" action="<?= base_url('admin/list_penjual') ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="card mb-12" style="max-width: auto;">
                                                                <div class="row no-gutters">
                                                                    <div class="col-md-4">
                                                                        <img src="<?= base_url('assets/img/product/'), $m['img_product']; ?>" class="card-img">
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
                                                                                        <?= $m['nama_product']; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Qty
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?= $m['qty']; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Sub Total
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>Rp. <?= number_format($m['sub_total']); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Ongkir
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>Rp. <?= number_format($m['ongkir']); ?><?= " (" . $m['kurir'] . " " . $m['paket'] . ")";
                                                                                                                                ?>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Total
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>Rp. <?= number_format($m['gross_amount']); ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Status
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?php if ($m['status_order'] == '0') {
                                                                                            echo 'Belum Dibayar';
                                                                                        } elseif ($m['status_order'] == '1') {
                                                                                            echo 'Pesanan Diproses';
                                                                                        } elseif ($m['status_order'] == '2') {
                                                                                            echo 'Sedang Dikirim';
                                                                                        } elseif ($m['status_order'] == '3') {
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
                                                                                        <?= $m['resi']; ?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Nama
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>
                                                                                        <?= $m['nama_member']; ?>

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Alamat
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td>

                                                                                        <?= $m['alamat']; ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        Estimasi Pengiriman
                                                                                    </td>
                                                                                    <td>:</td>
                                                                                    <td><?= $m['estimasi'] . " Hari"; ?></td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
            </div>
            </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
</div>