<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
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
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?= var_dump($url) ?>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_penjual') ?>" <?php if ($url == 'list_penjual') {
                                                                                echo 'class="nav-link active"';
                                                                            } else {
                                                                                echo 'class="nav-link"';
                                                                            } ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penjual</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_member') ?>" <?php if ($url == 'list_member') {
                                                                                echo 'class="nav-link active"';
                                                                            } else {
                                                                                echo 'class="nav-link"';
                                                                            } ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_product') ?>" <?php if ($url == 'list_product') {
                                                                                echo 'class="nav-link active"';
                                                                            } else {
                                                                                echo 'class="nav-link"';
                                                                            } ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_order') ?>" <?php if ($url == 'list_order') {
                                                                                echo 'class="nav-link active"';
                                                                            } else {
                                                                                echo 'class="nav-link"';
                                                                            } ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_packing') ?>" <?php if ($url == 'list_packing') {
                                                                                echo 'class="nav-link active"';
                                                                            } else {
                                                                                echo 'class="nav-link"';
                                                                            } ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Packing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/list_pengiriman') ?>" <?php if ($url == 'list_pengiriman') {
                                                                                    echo 'class="nav-link active"';
                                                                                } else {
                                                                                    echo 'class="nav-link"';
                                                                                } ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengiriman</p>
                            </a>
                        </li>
                    </ul>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>