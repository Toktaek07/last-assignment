<?php
    session_start();
    require("./connect.php");   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php   
        if($_SESSION['role'] == "admin") {

            require("./admin_panel.php");/*******/
    
        }else if ($_SESSION['role'] == "employee") {

            require("./employee_panel.php");/******/

        }else if ($_SESSION['role'] == "user") {

            require("./user_panel.php");/********/

        }else{
            session_destroy();
            header("location: ./index.php");
        }

?>
</body>
</html>