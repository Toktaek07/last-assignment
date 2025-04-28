<?php
session_start();
require("./connect.php");


//ใช้เมื่อรู้ว่าส่งค่าแบบ method ไหนมา ข้อมูลแบบไม่ sensitive
//ใช้เมื่อรู้ว่ามีการส่งค่า code มาแบบไหน
//ใช้เมื่อไม่รู้ว่ามีการส่งค่ามาแบบไหน
$user = $_POST['username'];
$pass = $_POST['password'];

//echo $user . $pass; ตรวจสอบว่าข้อมูลถูกส่งมาหรือยัง
$sql = "SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."'"; 

$query = mysqli_query($connect, $sql) or die("ERR Query!"); //ส่งคำสั่ง SQL ไปยังฐานข้อมูล
if($data_user = mysqli_fetch_array($query)) { 
    $_SESSION['uid'] = $data_user['uid ']; //กรณีที่ถูกต้อง
    $_SESSION['username'] = $data_user['username']; ;
    $_SESSION['role'] = $data_user['role']; 
    header("location: ./dashboard.php");

 } else{ 
    //กรณีที่ไม่ถูกต้อง
    header("location: ./index.php");
 }
    

?>