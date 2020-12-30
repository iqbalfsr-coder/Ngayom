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
                <form role="form" action="<?= base_url('admin/list_brand') ?>" method="post">
                    <div class="modal-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="brand">Penjual</label>

                                </div>
                                <div class="form-group">
                                    <label for="brand">Kategori</label>

                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>

                                </div>
                                <div class="form-group">
                                    <label for="brand">Nama Product</label>
                                    <input type="text" class="form-control" id="nama_brand" name="nama_brand" placeholder="Input Brand">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Input Harga">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Stock</label>
                                    <input type="text" class="form-control" id="tock" name="stock" placeholder="Input Stock">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Deskripsi</label>
                                    <input type="text" class="form-control" id="nama_brand" name="nama_brand" placeholder="Input Brand">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Image</label>

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
                            <th>Product</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$13 USD</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>