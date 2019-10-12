<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - FinnishOrder</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<style>
    body{
        font-family: 'Bai Jamjuree', sans-serif;
    }
</style>
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
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Finnish Order</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTablefinnish" width="100%" >
                                <thead>
                                <tr>
                                    <th>ORDERID</th>
                                    <th>สถานะ</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>ติดต่อ</th>
                                    <th>ที่อยู่</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคารวมทั้งหมด</th>
                                    <th>รหัสพัสดุ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include('connect.php');
                                $query = "SELECT * FROM orderfence WHERE orderstatus LIKE '%ส่งสินค้าเสร็จเรียบร้อย%'" or die("Error:" . mysqli_error());
                                $result = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["orderid"]. "</td>";
                                    echo "<td>" . $row["orderstatus"]. "</td>";
                                    echo "<td>" . $row["ordernamecus"]. "</td>";
                                    echo "<td>" . $row["ordercontact"]. "</td>";
                                    echo "<td>" . $row["orderaddress"]. "</td>";
                                    echo "<td>" . $row["ordernameproduct"]. "</td>";
                                    echo "<td>" . $row["ordertotalprice"]. "</td>";
                                    echo "<td>" . $row["trackingnumber"]. "</td>";
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
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
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
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>



</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTablefinnish').DataTable( {
            fixedHeader: true,
            processing: true
        } );
    } );
</script>

</html>
