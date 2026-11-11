
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Toko Kita</title>

    <link href="<?= base_url('assets/sbadmin/vendor/fontawesome-free/css/all.min.css'); ?>"
          rel="stylesheet">

    <link href="<?= base_url('assets/sbadmin/css/sb-admin-2.min.css'); ?>"
          rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">

                        <div class="p-5">

                            <div class="text-center">

                                <div class="mb-3">
                                    <i class="fas fa-store fa-3x text-primary"></i>
                                </div>

                                <h1 class="h4 text-gray-900 mb-2">
                                    TOKO KITA
                                </h1>

                                <p class="mb-4">
                                    Silakan login untuk melanjutkan
                                </p>

                            </div>

                            <?php if (!empty($error)): ?>

                                <div class="alert alert-danger">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    <?= html_escape($error); ?>
                                </div>

                            <?php endif; ?>

                            <form method="post"
                                  action="<?= site_url('auth/login'); ?>">

                                <div class="form-group">

                                    <label>Username</label>

                                    <input type="text"
                                           name="username"
                                           class="form-control form-control-user"
                                           placeholder="Masukkan username"
                                           value="<?= html_escape(set_value('username')); ?>"
                                           required
                                           autofocus>

                                </div>

                                <div class="form-group">

                                    <label>Password</label>

                                    <input type="password"
                                           name="password"
                                           class="form-control form-control-user"
                                           placeholder="Masukkan password"
                                           required>

                                </div>

                                <button type="submit"
                                        class="btn btn-primary btn-user btn-block">

                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Login

                                </button>

                            </form>

                            <hr>

                            <div class="text-center">

                                <a href="<?= site_url('toko'); ?>"
                                   class="small">

                                    Kembali ke Halaman Toko

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="<?= base_url('assets/sbadmin/vendor/jquery/jquery.min.js'); ?>"></script>

    <script src="<?= base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <script src="<?= base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <script src="<?= base_url('assets/sbadmin/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>
