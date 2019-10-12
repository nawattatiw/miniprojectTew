<?php
//-----เชื่อมต่อฐานข้อมูล
//-- ข้างล่างคือประกาศตัวแปล
$host = "localhost"; // ชื่อ host
$username = "root"; // ชื่อ username ที่ใช้ในการ login
$password = "";     // ชื่อ password ที่ใช้ในการ login
$dbname = "miniprojectnawattakron";  //ชื่อ database

$conn = mysqli_connect($host,$username,$password,$dbname) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");//คำสั่งเชื่อมต่อฐานข้อมูล

mysqli_query($conn, 'set names utf8'); // กำหนด charset ให้ฐานข้อมูลเพื่ออ่านภาษาไทยได้
?>