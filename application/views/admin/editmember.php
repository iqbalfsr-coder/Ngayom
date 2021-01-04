<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pembeli</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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

    <br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">Pembeli</h3>
            </div>
            <form role="form" action="" method="post">
                <div class="modal-body">
                    <div class="card card-primary">
                        <!-- form start -->
                        <div class="card-body">
                            <input type="text" class="form-control" id="id_member" name="id_member" value="<?= $member['id_member']; ?>" hidden>
                            <div class="form-group">
                                <label for="brand">Nama</label>
                                <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= $member['nama_member']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email_memberl" name="email_member" value="<?= $member['email_member']; ?>">
                            </div>
                            <div class=" form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" id="alamat"><?= $member['alamat']; ?></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="brand">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $member['no_hp']; ?>">
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