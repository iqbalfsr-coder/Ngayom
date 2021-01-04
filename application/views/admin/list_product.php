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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Tambah Product
        </button>
    </div>
    <br>
    <div class="container-fluid">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('admin/list_product'); ?>
                <form role="form" action="<?= base_url('admin/list_product') ?>" method="post">
                    <div class="modal-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
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
                                    <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Input Product">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Input Harga">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Stock</label>
                                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Input Stock">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi" id="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Berat</label>
                                    <input type="text" class="form-control" id="berat" name="berat" placeholder="Input Berat">
                                </div>
                            </div>

                            <!-- /.card-body -->
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
    <br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penjual</th>
                            <th>Kategori</th>
                            <th>Brand</th>
                            <th>Product</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Deskripsi</th>
                            <th>Images</th>
                            <th>Berat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $querypro = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`stock_product`,`p`.`desk_product`,`p`.`img_product`,`p`.`berat`,`pe`.`nama_penjual`,`ka`.`nama_kategori`,`br`.`nama_brand`
                    FROM `product` `p`
                    INNER JOIN `penjual` `pe` ON `p`.`id_penjual` = `pe`.`id_penjual`
                    INNER JOIN `kategori` `ka` ON `p`.`id_kategori` = `ka`.`id_kategori`
                    INNER JOIN `brand` `br` ON `p`.`id_brand` = `br`.`id_brand`";
                    $pro = $this->db->query($querypro)->result_array();
                    ?>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pro as $p) : ?>
                            <tr>
                                <th scope="row">
                                    <?= $i; ?>
                                </th>
                                <td><?= $p['nama_penjual']; ?></td>
                                <td><?= $p['nama_kategori']; ?></td>
                                <td><?= $p['nama_brand']; ?></td>
                                <td><?= $p['nama_product']; ?></td>
                                <td><?= $p['harga']; ?></td>
                                <td><?= $p['stock_product']; ?></td>
                                <td><?= $p['desk_product']; ?></td>
                                <td><img src="<?= base_url('assets/img/product/') . $p['img_product']; ?>" alt="" width="100px"></td>
                                <td><?= $p['berat']; ?></td>

                                <td>
                                    <a href="<?= base_url('admin/editproduct/') . $p['id_product']; ?>" class="badge badge-success">Edit</a> |
                                    <a href="<?= base_url('admin/deleteproduct/') . $p['id_product']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>

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