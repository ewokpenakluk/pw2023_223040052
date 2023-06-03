<?php
session_start();
 require"../koneksi.php";
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
            <div>
                <input value="login" class="btn btn-warning form-control mt-3" type="submit" name="loginbtn">
            </div>
        </form>
    </div>
    <div class="mt-4" style="width: 500px">
    <?php
    if(isset($_POST['loginbtn'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $query = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
        $countdata = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);

        if($countdata>0){
            if (password_verify($password,$data['password'])) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['login'] = true;
                header('location: ../adminpanel');
            }
            else{ ?>
                <div class="alert alert-warning" role="alert">
                    Password Salah!!!
                </div>
                <?php

            }
        }
        else{
            ?>
            <div class="alert alert-warning" role="alert">
                Data yang anda masukan salah!
            </div>
            <?php
        }

    }
    ?>
</div>
</div>
</body>
</html>