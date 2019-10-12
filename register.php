<?php
//เชื่อมต่อดาต้าเบด
session_start();
$host = "localhost"; //ชื่อ host
$username = "root";
$password = "";
$dbname = "miniprojectnawattakron"; //ขื่อ db

$conn = mysqli_connect($host,$username,$password,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_query($conn, 'set names utf8'); //ให้อ่านภาษาไทยได้
if (!$_SESSION["UserID"]){

    Header("Location: form_login.php");

}else{?>

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
    <!-- Topbar Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="homepagebg.html">
            <img style="width: 50px;height: 50px;" src="photo/bearicon.png">Hungry Bear</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="requestfromcus.php">HOME<span class="sr-only">(current)</span></a>
                </li>
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
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                </div>
                                <form  action="register.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="username"  id="username" placeholder="Username"  required name="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user btn-block" name="Password" id="Password" placeholder="Password" required name="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="Firstname"  id="Firstname" placeholder="ชื่อ"  required name="Firstname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="Lastname"  id="Lastname" placeholder="นามสกุล"  required name="Lastname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="email"  id="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user btn-block" name="phonenumber"  id="phonenumber" placeholder="เบอร์โทร">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="addressuser" rows="3" placeholder="ที่อยู่"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="Userlevel"  name="Userlevel" value="M" disabled>
                                    </div>
                                    <button class="form-control  btn-success"  type="submit" name="save">
                                        สมัครสมาชิก
                                    </button>
                                    <br>
                                    <a href="requestfromcus.php" class="form-control btn btn-danger" role="button" aria-pressed="true">กลับสู่หน้าหลัก</a>
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
<?php }?>
<?php
//---เชื่อมต่อฐานข้อมูล---
// ประกาศตัวแปร
$host = "localhost"; // ชื่อ host
$username = "root"; // ชื่อ user ที่ใช้ในการ login
$password = ""; // ชื่อ password ที่ใช้ในการ login
$dbname = "miniprojectnawattakron"; // ชื่อ database

$conn = mysqli_connect($host,$username,$password,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");//คำสั่งเชื่อมต่อฐานข้อมูล
mysqli_query($conn, 'set names utf8'); // กำหนด charset ให้ฐานข้อมูลเพื่ออ่านภาษาไทยได้
if(isset($_POST['save'])){//เมื่อกดปุ่ม save
    //กำหนดตัวแปร เก็บค่าจากการ input จากฟอร์ม
    $Username = $_POST['username'];
    $Password = md5($_POST['Password']);
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $addressuser = $_POST['addressuser'];
    $Userlevel = $_POST['Userlevel'];
    //คำสั่ง sql
    $sql1 = "INSERT INTO  usered (username,Password,Firstname,Lastname,email,phonenumber,addressuser,Userlevel) 
            VALUES('$Username','$Password','$Firstname','$Lastname','$email','$phonenumber','$addressuser','$Userlevel')";

    if(mysqli_query($conn,$sql1)){//รัน sql พร้อมแสดงข้อความ
        echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

        <div class='modal fade' id='myModal' role='dialog'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-body'>
                  <p>สมัครเรียบร้อย </p>
                </div>
                    <div class='modal-footer'>
                            <button type='button' class='btn btn-primary' data-dismiss='modal'>ตกลง</button>
                         </a>
                    </div>
                </div>
            </div>
        </div>";
        ;
    }else{
        echo "ผิดพลาด : ".$sql1."<br>".mysqli_error($conn);
    }
}
?>
