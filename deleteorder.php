<?php
require_once('connect.php');
if(isset($_GET['delete_id'])){ //เมื่อรับค่า delete_id
    $delete_id =$_GET['delete_id'];
    $sql = "DELETE FROM orderfence WHERE orderid ='".$delete_id."'";
    $result = mysqli_query($conn,$sql);
    echo "<script>alert('ลบข้อมูลเรียบร้อยแล้ว');window.location='confirmorder.php';</script>";
    mysqli_close($conn);
}
?>