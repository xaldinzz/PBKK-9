
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= html_escape($judul); ?></title>

    <link href="<?= base_url('assets/sbadmin/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/sbadmin/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <!-- SIDEBAR -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="<?= site_url('dashboard'); ?>">

            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-store"></i>
            </div>

            <div class="sidebar-brand-text mx-3">
                <?= html_escape($nama_toko); ?>
            </div>
        </a>

        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">Menu Toko</div>

        <!-- Data Produk -->
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('produk'); ?>">
                <i class="fas fa-fw fa-box"></i>
                <span>Data Produk</span>
            </a>
        </li>

        <!-- Data User -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-users"></i>
                <span>Data User</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">Lainnya</div>

        <!-- Halaman Toko -->
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('toko'); ?>">
                <i class="fas fa-fw fa-shopping-cart"></i>
                <span>Halaman Toko</span>
            </a>
        </li>

    </ul>

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                <span class="h5 mb-0 text-gray-800">
                    Dashboard Toko
                </span>
            </nav>

            <!-- MAIN CONTENT -->
            <div class="container-fluid">

                <h1 class="h3 mb-4 text-gray-800">
                    Selamat Datang di <?= html_escape($nama_toko); ?>!
                </h1>

                <!-- STATUS DATABASE -->
                <div class="alert alert-success shadow-sm">
                    <i class="fas fa-database mr-2"></i>
                    Status Database:
                    <strong><?= html_escape($status_database); ?></strong>
                </div>

                <!-- STATISTICS -->
                <div class="row">

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Produk
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    3 Produk
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Pengguna
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    10 Pengguna
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Status Toko
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Aktif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- INFORMASI TOKO -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Informasi Toko
                        </h6>
                    </div>

                    <div class="card-body">

                        <p>
                            Selamat datang di halaman dashboard administrasi
                            <?= html_escape($nama_toko); ?>.
                        </p>

                        <p>
                            Melalui dashboard ini, admin dapat mengelola
                            produk dan pengguna toko.
                        </p>

                        <a href="<?= site_url('produk'); ?>" class="btn btn-primary">
                            <i class="fas fa-box mr-2"></i>
                            Kelola Produk
                        </a>

                    </div>
                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Toko Kita 2026</span>
                </div>
            </div>
        </footer>

    </div>

</div>

<!-- JAVASCRIPT -->
<script src="<?= base_url('assets/sbadmin/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>
