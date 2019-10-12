<?php
//เชื่อมต่อดาต้าเบด
require_once('connect.php');
if($_GET["orderid"]=='') {
    echo "<script type='text/javascript'>";
    echo "alert(' OKAY PASS!!');";
    echo "window.location = 'tablerefund.php'; ";
    echo "</script>";

}
//รับค่าไอดีที่จะแก้ไข
$orderid = mysqli_real_escape_string($conn,$_GET['orderid']);

//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM orderfence WHERE orderid='$orderid' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hungry Bear</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon " >
                <img style="width: 75px;height: 75px;" src="photo/bearicon.png">
            </div>
            <div class="sidebar-brand-text mx-3">Hungry Bear</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main menu
        </div>
        <li class="nav-item ">
            <a class="nav-link" href="creatorder.php">
                <i class="fas fa-handshake"></i>
                <span>Creat Order</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="confirmorder.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Confirm Order</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="statusorder.php">
                <i class="far fa-calendar-check"></i>
                <span>Status Order</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="finnishorder.php">
                <i class="far fa-check-circle"></i>
                <span>Finnish Order</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Others
        </div>

        <!--  Nav item - request order  -->
        <li class="nav-item">
            <a class="nav-link" href="tablerequestorder.php">
                <i class="fas fa-id-card"></i>
                <span>Tables Request Order</span></a>
        </li>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tableforcus.php">
                <i class="fas fa-fw fa-table"></i>
                <span>TABLE for customer</span></a>
        </li>
        <!-- Nav Item - report -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsereport" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-file-upload"></i>
                <span>Report</span>
            </a>
            <div id="collapsereport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">ALL REPORT</h6>
                    <a class="collapse-item" href="report.php">Report order</a>
                    <a class="collapse-item" href="ReportRFC.php">Report RFC</a>
                    <a class="collapse-item" href="tablerefund.php">Report Refund</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- End of Topbar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow-right">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nawattakron Somboonma</span>
                            <img class="img-profile rounded-circle" src="photo/profile.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <div class="row" >
                    <div class="col">
                        <!--                        blank ไว้-->
                    </div>
                    <div class="col">
                        <h1>REFUND ORDER</h1><hr>
                        <form action="updaterefund.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">ORDERID</label>
                                    <input type="text"  name="orderid" id="orderid" class="form-control" value= "<?php echo $orderid; ?>" disabled="disabled" >
                                    <input type="hidden" class="form-control" id="orderid"  name="orderid" value="<?php echo $orderid; ?>"  >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ordercustomer">สถานะ</label>
                                    <select class="form-control" name="orderstatus">
                                        <option value="<?php  echo $row["orderstatus"]?>"><?php  echo $row["orderstatus"]?></option>
                                        <!--   confrim order  -->
                                        <option value="Refund">Refund</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ordernamecus">ชื่อลูกค้า</label>
                                <input type="text" class="form-control" name="ordernamecus" value="<?php  echo $row["ordernamecus"]?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">ประเภทสินค้า</label>
                                    <input type="text" class="form-control" name="typepd" value="<?php  echo $row["typepd"]?>"disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">ชื่อสินค้า</label>
                                    <input type="text" class="form-control" name="ordernameproduct" value="<?php  echo $row["ordernameproduct"]?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="orderpieceproduct">จำนวนชิ้น</label>
                                    <input type="text" class="form-control" name="orderpieceproduct" value="<?php  echo $row["orderpieceproduct"]?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="orderservicecharge">ค่าบริการ</label>
                                <input type="text" class="form-control" name="orderservicecharge" value="<?php  echo $row["orderservicecharge"]?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ordertotalprice">ราคาสินค้า(รวมทั้งหมด)</label>
                                <input type="text" class="form-control" name="ordertotalprice" value="<?php  echo $row["ordertotalprice"]?>" readonly>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="orderdatebuy">วันที่จะไปซื้อให้</label>
                                    <input type="date" class="form-control"  name="orderdatebuy" value="<?php  echo $row["orderdatebuy"]?>" >
                                </div>
                                <div class="form-group">
                                    <label for="refundreason">สาเหตุ</label>
                                    <textarea class="form-control" name="refundreason" rows="3" ><?php  echo $row["refundreason"]?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="trackingnumber">Tracking number</label>
                                    <input type="text" class="form-control"  name="trackingnumber"value="<?php  echo $row["trackingnumber"]?>" >
                                </div>
                                <button type="submit" class="btn btn-primary" name="update" onClick="window.location.reload();">อัพเดท</button>
                                <button type="reset" class="btn btn-danger">รีค่า</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <!--        จัดกึ่งกลาง              -->
                </div>
            </div>


            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Hungry Bear  Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>
<?php
////---เชื่อมต่อฐานข้อมูล---
//// ประกาศตัวแปร
//$host = "localhost"; // ชื่อ host
//$username = "root"; // ชื่อ user ที่ใช้ในการ login
//$password = ""; // ชื่อ password ที่ใช้ในการ login
//$dbname = "miniprojectnawattakron"; // ชื่อ database
//
//$conn = mysqli_connect($host,$username,$password,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");//คำสั่งเชื่อมต่อฐานข้อมูล
//mysqli_query($conn, 'set names utf8'); // กำหนด charset ให้ฐานข้อมูลเพื่ออ่านภาษาไทยได้
//if(isset($_POST['save'])){//เมื่อกดปุ่ม save
//    //กำหนดตัวแปร เก็บค่าจากการ input จากฟอร์ม
//    $orderid = $_POST['orderid'];
//    $ordercustomer = $_POST['ordercustomer'];
//    $ordernamecus = $_POST['ordernamecus'];
//    $ordercontact = $_POST['ordercontact'];
//    $orderaddress = $_POST['orderaddress'];
//    $typepd = $_POST['typepd'];
//    $ordernameproduct = $_POST['ordernameproduct'];
//    $orderpieceproduct = $_POST['orderpieceproduct'];
//    $orderdetailproduct	 = $_POST['orderdetailproduct'];
//    $orderservicecharge	 = $_POST['orderservicecharge'];
//    $ordertotalprice	= $_POST['ordertotalprice'];
//    $orderdatebuy		 = $_POST['orderdatebuy'];
//    //คำสั่ง sql
//    $sql1 = "INSERT INTO orderfence(orderid,ordercustomer,ordernamecus,ordercontact,orderaddress,typepd,ordernameproduct,orderpieceproduct,orderdetailproduct,orderservicecharge,ordertotalprice,orderdatebuy)
//            VALUES('$orderid','$ordercustomer','$ordernamecus','$ordercontact','$orderaddress','$typepd','$ordernameproduct','$orderpieceproduct','$orderdetailproduct','$orderservicecharge','$ordertotalprice','$orderdatebuy')";
//
//    if(mysqli_query($conn,$sql1)){//รัน sql พร้อมแสดงข้อความ
//        echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>
//
//        <div class='modal fade' id='myModal' role='dialog'>
//            <div class='modal-dialog modal-lg'>
//              <div class='modal-content'>
//                <div class='modal-body'>
//                  <p>บันทึกเรียบร้อย</p>
//                </div>
//                    <div class='modal-footer'>
//                            <button type='button' class='btn btn-primary' data-dismiss='modal'>ตกลง</button>
//                         </a>
//                    </div>
//                </div>
//            </div>
//        </div>";
//        ;
//    }else{
//        echo "ผิดพลาด : ".$sql1."<br>".mysqli_error($conn);
//    }
//}
//?>
<?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if(isset($_POST['update'])) {
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
    $orderid = $_POST['orderid'];
    $orderstatus = $_POST['orderstatus'];
    $ordernamecus = $_POST['ordernamecus'];
    $typepd = $_POST['typepd'];
    $ordernameproduct = $_POST['ordernameproduct'];
    $orderpieceproduct = $_POST['orderpieceproduct'];
    $orderservicecharge = $_POST['orderservicecharge'];
    $ordertotalprice = $_POST['ordertotalprice'];
    $orderdatebuy = $_POST['orderdatebuy'];
    $refundreason = $_POST['refundreason'];
    $trackingnumber = $_POST['trackingnumber'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

    $sql = "UPDATE orderfence SET  
			orderid='$orderid' ,
			orderstatus='$orderstatus' , 
			ordernamecus='$ordernamecus' ,
			ordernameproduct='$ordernameproduct' ,
			orderpieceproduct='$orderpieceproduct' ,
			orderservicecharge='$orderservicecharge' ,
			ordertotalprice='$ordertotalprice' ,
			orderdatebuy='$orderdatebuy' ,
			refundreason='$refundreason',
			trackingnumber='$trackingnumber'  
			WHERE orderid='$orderid' ";

    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

    mysqli_close($conn); //ปิดการเชื่อมต่อ database
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfuly');";
        echo "window.location = 'confirmorder.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error but saving');";
        echo "window.location = 'statusorder.php'; ";
        echo "</script>";
    }
}
?>
+