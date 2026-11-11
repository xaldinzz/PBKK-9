
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $judul; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <?= $nama_toko; ?>
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-5">

        <div class="p-5 mb-4 bg-white rounded-4 shadow-sm text-center">
            <h1 class="display-5 fw-bold">
                Selamat Datang di <?= $nama_toko; ?>!
            </h1>

            <p class="fs-5 mt-3">
                Temukan berbagai produk menarik dengan harga terbaik.
            </p>

            <a href="#produk" class="btn btn-primary btn-lg mt-3">
                Mulai Belanja
            </a>
        </div>

        <!-- Produk -->
        <h2 class="mb-4" id="produk">Produk Unggulan</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">
                            Laptop berkualitas untuk kebutuhan sehari-hari.
                        </p>
                        <p class="text-primary fw-bold">Rp 7.500.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Smartphone</h5>
                        <p class="card-text">
                            Smartphone dengan fitur modern dan menarik.
                        </p>
                        <p class="text-primary fw-bold">Rp 3.500.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Headphone</h5>
                        <p class="card-text">
                            Headphone nyaman untuk mendengarkan musik.
                        </p>
                        <p class="text-primary fw-bold">Rp 500.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
        &copy; 2026 <?= $nama_toko; ?>. All Rights Reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
