<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kategori</h1>
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
                <h3 class="card-title">Kategori</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <form role="form" action="" method="post">
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $kategori['id_kategori'] ?>" hidden>
                    <div class="modal-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kategori">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Icons</label>
                                    <select class="fa" name="icon">
                                        <option>--Pilih Icons--</option>
                                        <option value="fas fa-female">&#xf182; Female</option>
                                        <option value="fas fa-child">&#xf1ae; Child</option>
                                        <option value="fas fa-male">&#xf183; Male</option>
                                        <option value="fa fa-mobile-alt">&#xf3cd; Gadgets</option>
                                        <option value="fa fa-microchip">&#xf2db; Electronics</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>