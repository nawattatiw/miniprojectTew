<?php
session_start();
$ta = mysqli_connect("localhost","root", "", "miniprojectnawattakron");
echo $_POST["username"];
echo $_POST["password"];
if(empty($_POST["username"]) and empty($_POST["password"])){
    header("location:login.php");
}else{
    $strSQL="";
    $strSQL = "SELECT * FROM admin WHERE username = '$_POST[username]' and password = '$_POST[password]'";
    $objQuery = mysqli_query($ta,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    // echo $objResult["id"];
    if(!$objResult)
    {
        header("location:login.php");
    }
    else
    {
        $_SESSION["username"] = $objResult["username"];
        $_SESSION["status"] = $objResult["status"];


        // session_write_close();

        if($objResult["status"] == "admin")
        {
            header("location:index.php");
        }
        else
        {
            header("location:requestfromcus.php");
        }
    }
    mysqli_close($ta);
}
?>