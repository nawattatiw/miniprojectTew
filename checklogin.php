<?php
session_start();
if(isset($_POST['Username'])){
    //connection
    include("connect.php");
    //รับค่า user & password
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    //query
    $sql="SELECT * FROM usered Where Username='".$Username."' and Password='".$Password."' ";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_array($result);

        $_SESSION["UserID"] = $row["ID"];
        $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
        $_SESSION["Userlevel"] = $row["Userlevel"];
        $_SESSION["Username"] = $row["Username"];
        $_SESSION["phonenumber"] = $row["phonenumber"];
        $_SESSION["addressuser"] = $row["addressuser"];

        if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

            Header("Location: index.php");

        }

        if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

            Header("Location: requestfromcus.php");

        }

    }else{
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";

    }

}else{


    Header("Location: login.php"); //user & password incorrect back to login again

}
?>