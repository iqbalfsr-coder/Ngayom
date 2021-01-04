<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product</h1>
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

    <div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
            </div>
            <div class="card-body table-responsive p-0">

                <?php
                $querypro = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`stock_product`,`p`.`desk_product`,`p`.`img_product`,`p`.`berat`,`pe`.`nama_penjual`,`ka`.`nama_kategori`,`br`.`nama_brand`
                    FROM `product` `p`
                    INNER JOIN `penjual` `pe` ON `p`.`id_penjual` = `pe`.`id_penjual`
                    INNER JOIN `kategori` `ka` ON `p`.`id_kategori` = `ka`.`id_kategori`
                    INNER JOIN `brand` `br` ON `p`.`id_brand` = `br`.`id_brand`";
                $pro = $this->db->query($querypro)->result_array();
                ?>
                <?= form_open_multipart(''); ?>
                <form role="form" action="<?= base_url('') ?>" method="post">
                    <div class="modal-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <input type="text" name="id_product" value="<?= $product['id_product']; ?>" hidden>
                                <div class="form-group">
                                    <label>Penjual</label>
                                    <select class="form-control" name="id_penjual">
                                        <option value="">--Pilih Penjual--</option>
                                        <?php foreach ($penjual as $p) : ?>
                                            <option value="<?= $p['id_penjual']; ?>"><?= $p['nama_penjual']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="id_kategori">
                                        <option value="">--Pilih Kategori--</option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control" name="id_brand">
                                        <option value="">--Pilih Brand--</option>
                                        <?php foreach ($brand as $b) : ?>
                                            <option value="<?= $b['id_brand']; ?>"><?= $b['nama_brand']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Nama Product</label>
                                    <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?= $product['nama_product']; ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="brand">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $product['harga']; ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="brand">Stock</label>
                                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $product['stock_product']; ?>">
                                </div>
                                <div class=" form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi"><?= $product['desk_product'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">Image Product</div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/img/product/') . $product['img_product']; ?>" class="img-thumbnail" width="100px">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Berat</label>
                                    <input type="text" class="form-control" id="berat" name="berat" value="<?= $product['berat']; ?>">
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>