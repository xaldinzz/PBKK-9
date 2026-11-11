
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

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="<?= site_url('dashboard'); ?>">
            <div class="sidebar-brand-icon">
                <i class="fas fa-store"></i>
            </div>
            <div class="sidebar-brand-text mx-3">TOKO KITA</div>
        </a>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('produk'); ?>">
                <i class="fas fa-box"></i>
                <span>Data Produk</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('toko'); ?>">
                <i class="fas fa-shopping-cart"></i>
                <span>Halaman Toko</span>
            </a>
        </li>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                <span class="h5 mb-0 text-gray-800">Data Produk</span>
            </nav>

            <div class="container-fluid">

                <h1 class="h3 mb-4 text-gray-800">
                    Manajemen Produk
                </h1>

                <div class="mb-3">
                    <a href="<?= site_url('produk/tambah'); ?>"
                       class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Produk
                    </a>

                    <a href="<?= site_url('dashboard'); ?>"
                       class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                </div>

                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Daftar Produk Toko
                        </h6>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (!empty($produk)): ?>

                                        <?php $no = 1; ?>

                                        <?php foreach ($produk as $p): ?>

                                            <tr>

                                                <td><?= $no++; ?></td>

                                                <td>
                                                    <?php if (!empty($p->gambar)): ?>
                                                        <img
                                                            src="<?= base_url('uploads/produk/'.rawurlencode($p->gambar)); ?>"
                                                            alt="<?= html_escape($p->nama_produk); ?>"
                                                            style="width:80px;height:70px;object-fit:cover;">
                                                    <?php else: ?>
                                                        <span class="text-muted">Tidak ada gambar</span>
                                                    <?php endif; ?>
                                                </td>

                                                <td><?= html_escape($p->nama_produk); ?></td>

                                                <td><?= html_escape($p->deskripsi); ?></td>

                                                <td>
                                                    Rp <?= number_format($p->harga, 0, ',', '.'); ?>
                                                </td>

                                                <td><?= html_escape($p->stok); ?></td>

                                                <td>
                                                    <a href="<?= site_url('produk/edit/'.$p->id); ?>"
                                                       class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <a href="<?= site_url('produk/hapus/'.$p->id); ?>"
                                                       class="btn btn-danger btn-sm"
                                                       onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                                        <i class="fas fa-trash"></i>
                                                        Hapus
                                                    </a>
                                                </td>

                                            </tr>

                                        <?php endforeach; ?>

                                    <?php else: ?>

                                        <tr>
                                            <td colspan="7" class="text-center">
                                                Belum ada data produk.
                                            </td>
                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Toko Kita 2026</span>
                </div>
            </div>
        </footer>

    </div>
</div>

<script src="<?= base_url('assets/sbadmin/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('assets/sbadmin/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>
