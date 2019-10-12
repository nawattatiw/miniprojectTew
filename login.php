<?php
//เชื่อมต่อดาต้าเบด
session_start();
$host = "localhost"; //ชื่อ host
$username = "root";
$password = "";
$dbname = "miniprojectnawattakron"; //ขื่อ db

$conn = mysqli_connect($host,$username,$password,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_query($conn, 'set names utf8'); //ให้อ่านภาษาไทยได้
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="homepagebg.html">
        <img style="width: 50px;height: 50px;" src="photo/bearicon.png">Hungry Bear</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="tableforcus.php">TRACKING<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="credit.php">CREDIT<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="register.php">Register</a>
        </form>
    </div>
</nav>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <img src="photo/Hungry%20Bear.png" style="width:1000px; ">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                </div>
                                <form  action="checklogin.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="Username"  id="Username" placeholder="Username"  required name="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user btn-block" name="Password" id="Password" placeholder="Password" required name="Password">
                                    </div>
                                    <button class="form-control  btn-primary"  type="submit">
                                        Login
                                    </button>
                                    <br>
                                    <button class="form-control btn-danger" type="reset">
                                        Reset
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
