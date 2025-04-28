<?php
session_start();
    require("./connect.php");

    $uid = $_GET['uid'];
    $sql = "DELETE FROM `users` WHERE uid = '". $uid."'";
    if($query = mysqli_query($connect,$sql)){
        header("location: ./dashboard.php");
    }else{
        echo "ลบไม่สำเร็จ";
    }
    ?>