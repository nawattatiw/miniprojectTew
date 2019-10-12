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
                <a class="nav-link" href="credit.php">CREDIT<span class="sr-only">(current)</span></a>
            </li>


        </ul>
    </div>
</nav>
<div class="col">

</div>
<div class="container-fluid ">
    <!-- DataTales Example -->
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ติดตามสถานะสินค้า</h6>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-bordered" id="dataforcus" width="100%" >
                    <thead>
                    <tr>
                        <th>รหัสพัสดุ</th>
                        <th>ชื่อลูกค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>สถานะ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include('connect.php');
                    $query = "SELECT * FROM orderfence WHERE orderstatus LIKE '%ส่งสินค้าเสร็จเรียบร้อย%'" or die("Error:" . mysqli_error());
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["trackingnumber"]. "</td>";
                        echo "<td>" . $row["ordernamecus"]. "</td>";
                        echo "<td>" . $row["ordernameproduct"]. "</td>";
                        echo "<td>" . $row["orderstatus"]. "</td>";
                        echo "</tr>";
                    }
                    $conn->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="row" >
    <div class="col-2">
        <!--                        blank ไว้-->
    </div>
    <div class="col">


    </div>
</div>
<div class="col-2">
    <!--        จัดกึ่งกลาง              -->
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

