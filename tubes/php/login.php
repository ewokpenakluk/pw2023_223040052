
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body style="background-color: blue">
    <section class="container">
        <div class="row content d-flex justify-content-center tengah">
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">
                    <h3 class="mb-4 text-center fs-1">Login</h3>
                    <form class="mb-3" action="" method="post">
                        <div class="form-floating mb-3">
                            <Input class="form-control rounded-0" type="text" name="username" id="username" placeholder="password">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <Input class="form-control rounded-0" type="password" name="password" id="password" placeholder="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label for="" class="form-check-label">Ingat Saya</label>
                        </div>
                        <div class="d-grid gap-2 mb3">
                            <button type="submit" name="login" class="btn btn-dark btn-lg border-0 rounder-0">Login</button>
                        </div>
                        <div class="Registrasi mb-3">
                            <p>Belum memiliki akun? <a href="registrasi.php" class="text-decoration-none">Daftar</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






    <!-- Script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>


</html>