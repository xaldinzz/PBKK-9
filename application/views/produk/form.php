
<?php
$edit = isset($produk);

$action = $edit
    ? site_url('produk/edit/'.$produk->id)
    : site_url('produk/tambah');

$nama = $edit ? $produk->nama_produk : '';
$deskripsi = $edit ? $produk->deskripsi : '';
$harga = $edit ? $produk->harga : '';
$stok = $edit ? $produk->stok : '';
$gambar = $edit ? $produk->gambar : '';
?>

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

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">
                <span class="h5 mb-0 text-gray-800">
                    <?= html_escape($judul); ?>
                </span>
            </nav>

            <div class="container-fluid">

                <h1 class="h3 mb-4 text-gray-800">
                    <?= html_escape($judul); ?>
                </h1>

                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Form Data Produk
                        </h6>
                    </div>

                    <div class="card-body">

                        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                        <?php if (isset($error_upload)): ?>
                            <div class="alert alert-danger">
                                <?= $error_upload; ?>
                            </div>
                        <?php endif; ?>

                        <form method="post"
                              action="<?= $action; ?>"
                              enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text"
                                       name="nama_produk"
                                       class="form-control"
                                       value="<?= html_escape(set_value('nama_produk', $nama)); ?>"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi"
                                          class="form-control"
                                          rows="4"><?= html_escape(set_value('deskripsi', $deskripsi)); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number"
                                       name="harga"
                                       class="form-control"
                                       min="0"
                                       value="<?= html_escape(set_value('harga', $harga)); ?>"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number"
                                       name="stok"
                                       class="form-control"
                                       min="0"
                                       value="<?= html_escape(set_value('stok', $stok)); ?>"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Gambar Produk</label>

                                <input type="file"
                                       name="gambar"
                                       class="form-control-file"
                                       accept=".jpg,.jpeg,.png,.gif">

                                <small class="form-text text-muted">
                                    Format JPG, JPEG, PNG, GIF. Maksimal 2 MB.
                                </small>
                            </div>

                            <?php if ($edit && !empty($gambar)): ?>
                                <div class="form-group">
                                    <label>Gambar Saat Ini</label><br>

                                    <img src="<?= base_url('uploads/produk/'.rawurlencode($gambar)); ?>"
                                         alt="Gambar Produk"
                                         style="max-width:200px; max-height:200px;">

                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save mr-2"></i>
                                Simpan
                            </button>

                            <a href="<?= site_url('produk'); ?>"
                               class="btn btn-secondary">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </a>

                        </form>

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
