<?php session_start();
?>
<?php
require_once('connect.php');
if (!$_SESSION["UserID"]){

    Header("Location: login.php");

}else{?>
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
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow-right">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 "><?=$_SESSION['User']; ?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Create Order
                        </a>
                        <a class="dropdown-item" href="tableforcus.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Check Status Order your own
                        </a>
                        <a class="dropdown-item" href="edituser.php" readonly>
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400" ></i>
                            Edit
                        </a>
                        <a class="dropdown-item" href="#" readonly>
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Setting (comming soon)
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>
        </form>
    </div>
</nav>
    </ul>
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
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5" >
            <div class="row">
                <div class="card shadow col-12 ">
                    <div class="card-header py-4">
                        <h6 class="m-0 font-weight-bold text-dark">อยากให้เรารับหิ้วอะไรล่ะ ?</h6>
                    </div>
                    <div class="card-body">
                        <form action="requestfromcus.php" method="POST" enctype="multipart/form-data">
                            <?php
                            //คำสั่ง sql ,
                            $sql2 = "SELECT MAX(ordercustomer) AS ordercustomer FROM requestorder";
                            $query = mysqli_query($conn,$sql2);
                            // $row = mysqli_num_rows($query);
                            $rs = mysqli_fetch_array($query);
                            // echo $row;
                            if($rs['ordercustomer'] !=" "){
                                $sub = substr($rs['ordercustomer'],2)+1;
                                $ordercustomer = sprintf('OD%03.0f', $sub);
                            }else{
                                $ordercustomer = "OD001";
                            }
                            ?>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="ordercustomer">หมายเลขออเดอร์</label>
                                    <input type="text" name="ordercustomer" id="ordercustomer" class="form-control"  value="<?php echo $ordercustomer; ?>" disabled="disabled" >
                                    <input  type="hidden" class="form-control" id="ordercustomer"  name="ordercustomer" value= "<?php echo $ordercustomer; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="orderdate">วันที่จะให้ซื้อสินค้า</label>
                                    <input type="date" class="form-control" name="orderdate">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">ที่อยู่จะให้ไปซื้อสินค้า</label>
                                    <textarea class="form-control" name ="orderaddress" rows="3"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">รายละเอียดสินค้า</label>
                                    <textarea class="form-control" name ="orderproductname" rows="3" placeholder="กรุณาแจงสินค้าตามที่ท่านต้องการถ้ามีคำถามทางเราก็จะโทรกลับไป"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="orderpiece">จำนวนชิ้น </label>
                                    <input type="text" class="form-control" name="orderpiece">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ordercontact">Line & Facebook (ที่สามารถคุยกับคนหิ้วได้)</label>
                                <input type="text" class="form-control" name="ordercontact" >
                            </div>
                            <div class="form-group">
                                <label for="orderaddress">ที่อยู่ลูกค้า</label>
                                <textarea class="form-control" name="orderaddresscus" rows="3"  placeholder="แจ้งให้ระเอียดให้ครบถูกต้อง // ถ้ามีหลายท่านกรุณาระบุชื่อผู้รับคู่กับสินค้า  เช่น 1. nike nmd ของคุณ XXXX XXX" ><?php
                                    //2. query ข้อมูลจากตาราง:
                                    $sql = "SELECT * FROM usered WHERE ID = '".$_SESSION['UserID']."'";
                                    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
                                    while($data = mysqli_fetch_array($result)){
                                        echo $data['addressuser'];
                                    }
                                    ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="save" onClick="window.location.reload();">บันทึกรายการสินค้า</button>
                            <button type="reset" class="btn btn-danger">รีค่า</button>
                        </form>
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
    $ordercustomer = $_POST['ordercustomer'];
    $orderdate = $_POST['orderdate'];
    $orderaddress = $_POST['orderaddress'];
    $orderproductname = $_POST['orderproductname'];
    $orderpiece = $_POST['orderpiece'];
    $ordercontact = $_POST['ordercontact'];
    $orderaddresscus = $_POST['orderaddresscus'];
    //คำสั่ง sql
    $sql1 = "INSERT INTO requestorder (ordercustomer,orderdate,orderaddress,orderproductname,orderpiece,ordercontact,orderaddresscus) 
            VALUES('$ordercustomer','$orderdate','$orderaddress','$orderproductname','$orderpiece','$ordercontact','$orderaddresscus')";

    if(mysqli_query($conn,$sql1)){//รัน sql พร้อมแสดงข้อความ
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='requestfromcus.php';</script>";

    }else{
        echo "ผิดพลาด : ".$sql1."<br>".mysqli_error($conn);
    }
}
?>