<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('admin') ?>" class="brand-link">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Ngayom</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>Penjualan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Rp. 1.000.000</h3>

                                <p>Pendapatan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Pengiriman</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Stock Barang</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

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
                                $sortuser  = $product['id_penjual'];
                                $querypro = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`stock_product`,`p`.`desk_product`,`p`.`img_product`,`p`.`berat`,`pe`.`nama_penjual`,`ka`.`nama_kategori`,`br`.`nama_brand`
                    FROM `product` `p`
                    INNER JOIN `penjual` `pe` ON `p`.`id_penjual` = `pe`.`id_penjual`
                    INNER JOIN `kategori` `ka` ON `p`.`id_kategori` = `ka`.`id_kategori`
                    INNER JOIN `brand` `br` ON `p`.`id_brand` = `br`.`id_brand`
                    where `p`.`id_penjual` = $sortuser;
                    ";
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
                                                <a href="<?= base_url('admin/editproduct/') . $p['id_product']; ?>" class="badge badge-success">Edit</a>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Orders</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <?php
                    error_reporting(0);
                    $queryorder = "SELECT `p`.`id_product`, `p`.`nama_product`, `p`.`harga`, `p`.`img_product`, `t`.`id_order`, `m`.`id_member`,`t`.`qty`, `t`.`transaction_time`, `t`.`status_code`, `t`.`pdf_url`,`t`.`ongkir`,`t`.`gross_amount`,`t`.`sub_total`,`t`.`status_order`,`m`.`nama_member`,`m`.`alamat`,`t`.`kurir`,`t`.`paket`,`t`.`estimasi`,`t`.`resi`
                FROM `transaksi` `t`
                JOIN `member` `m` ON `t`.`id_member` = `m`.`id_member`
                JOIN `product` `p` ON `t`.`id_product` = `p`.`id_product`
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
                    <!-- /.card-body -->
                    <!-- /.card-footer -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.2
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->