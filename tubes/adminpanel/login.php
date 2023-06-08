<?php
session_start();
 require"../koneksi.php";



if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Cek username
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["submit"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $row['role'];
        

           
            // Redirect ke halaman sesuai peran
            if ($row['role'] === 'admin') {
                header("Location: ../adminpanel");
                exit;
            } else if ($row['role'] === 'user') {
                header("Location: ../index.php");
                exit;
            } else {
                echo "Anda tidak memiliki akses.";
            }
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<style>
        body{
            background-color: #3b3f46;
            color: white;
        }
        .main{
            height: 100vh
        }
        .login-box{
            width: 500px;
            height: 300px;
            box-sizing: border-box;
            border-radius: 10px;
        }
    </style>
<body>
<div class="main d-flex flex-column justify-content-center align-items-center">
    <form class="mb-3" action="" method="post">
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style:italic;">Username atau Password salah</p>
                        <?php endif; ?>
    <div class="login-box p-5 shadow">
        <form action="" method="post">
            <div>
                <label for="username">username</label>
                <input type="text" class="form-control" name="username"
                id="username">
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" class="form-control" name="password"
                id="password">
            </div>
            <a href="./regisuser.php">Daftar</a>
            <div>
                <input value="login" class="btn btn-warning form-control mt-3" type="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="mt-4" style="width: 500px">
    
</div>
</div>
</body>
</html>