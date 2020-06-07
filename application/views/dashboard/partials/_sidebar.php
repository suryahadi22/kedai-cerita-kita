<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="<?= base_url(); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kedai Cerita Kita</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander The Great</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
                <a href="<?= base_url('dashboard') ?>" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="<?= base_url('input') ?>" class="nav-link <?= ($this->uri->segment(1) == 'input') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-keyboard"></i>
                    <p>
                        Input Barang
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="<?= base_url('barang') ?>" class="nav-link <?= ($this->uri->segment(1) == 'barang') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>
                        Stok Barang
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->