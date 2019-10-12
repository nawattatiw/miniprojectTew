<?php
//เชื่อมต่อดาต้าเบด
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>หมีหิวติ้งของ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Bai Jamjuree', sans-serif;
        }
    </style>

    <!-- Custom styles for this template-->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="requestfromcus.php">
        <img style="width: 50px;height: 50px;" src="photo/bearicon.png">Hungry Bear</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="requestfromcus.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="tableforcus.php">TRACKING<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="requestfromcus.php">CREDIT<span class="sr-only">(current)</span></a>
            </li>


        </ul>
    </div>
</nav>
<div class="">
    <div class="col">
        <section class="features-icons bg-light text-center">
            <br>
            <div class="container">
                <div class="row">
                    <hr>
                    <div class="card" style="width: 15rem;">
                        <img src="photo/talk.png" class="card-img-top" style="height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title text-gray-900">คุยง่าย</h5>
                            <p class="card-text ">ติดต่อสะดวก ได้คุยตลอดเวลา</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card" style="width: 15rem;">
                        <img src="photo/trackingproduct.jpg" class="card-img-top" style="height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title text-gray-900">ติดตามสินค้า24 ชม.</h5>
                            <p class="card-text">Tracking Number</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card" style="width: 15rem;">
                        <img src="photo/credit.jpg" class="card-img-top" style="height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title text-gray-900 ">มีหลักฐาน</h5>
                            <p class="card-text">มีหลักฐานการโอนเงินสินค้า</p>
                            <a href="https://www.facebook.com/pg/zwittty/photos/?tab=album&album_id=147721159232302"
                               class="btn btn-primary" target="_blank">คลิกดูหลักฐาน</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">ข้อมูลติดต่อโอนเงิน</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    Line <br>
                    ns.wit
                    <hr>
                    *อัพเดทบัญชี*<br>
                    0391316007 กสิกร นวัตกรณ์ สมบุญมา<br>
                    0633075689 True wallet Nawattakronsoomboonma
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

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataforcus').DataTable( {
            "paging":   false,  // ไม่แสดงการแบ่งหน้า
            "ordering": false, // ไม่ให้ทำการเรียงข้อมูลเมื่อคลิกที่คอลัมน์รายการได้
            "info":     true  // ไม่แสดงรายละเอียดรายการจำนวนข้อมูล
            // "bJQueryUI": true,
            // "sPaginationType": "full_numbers"
        } );
    } );
</script>
</html>

