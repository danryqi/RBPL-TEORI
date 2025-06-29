<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= baseurl; ?>/css/<?= $data['css'] ?>" />
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <div class="container-fluid login-wrapper">
        <div class="row h-100">
            <!-- Kiri -->
            <div
                class="col-md-8 d-none d-md-flex bg-darkgreen justify-content-center align-items-center flex-column text-white">
                <img src="<?= baseurl; ?>/img/Logo River.png" alt="Logo Rifer Kahve" class="logo mb-4" />
            </div>

            <!-- Kanan -->
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="background-color: #e6e2df">
                <div style="width: 60%">
                    <div class="text-center mb-4">
                        <img src="<?= baseurl; ?>/img/Logo River Hijau.png" alt="Logo Rifer Kahve" class="mb-2"
                            style="width: 150px" />
                    </div>

                    <form action="<?= baseurl; ?>/LoginAuth/loginProcess" method="POST">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control custom-input" placeholder="Username" required />
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" class="form-control custom-input" placeholder="Password" required />
                        </div>
                        <div class="d-flex justify-content-between mb-3 small align-items-center">
                            <div class="custom-checkbox d-flex align-items-center gap-1">
                                <input type="checkbox" id="rememberMe" />
                                <label for="rememberMe" class="form-check-label">Ingat saya</label>
                            </div>
                            <a href="#" class="text-decoration-none">Lupa Password?</a>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn" style="background-color: #0c4a3b; color: white">
                                Login
                            </button>
                        </div>

                        <div class="separator my-3">
                            <span>Atau</span>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="button" class="btn btn-outline-secondary btn-google">
                                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" width="15"
                                    class="me-2" />
                                <span style="font-size: 14px">Login dengan Google</span>
                            </button>
                        </div>

                        <div class="text-center small">
                            <span style="color: #0c4a3b">Belum memiliki akun?</span>
                            <a href="#" class="fw-semibold text-decoration-none">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>