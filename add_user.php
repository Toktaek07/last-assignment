<?php
    session_start();
    require("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form action="./add_user.php" method="get">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <select name="role" id="">
            <option value="admin">admin</option>
            <option value="employee">employee</option>
            <option value="user">user</option>
        </select>  
        <input type="submit" value="Add">
       
    </form>
<?php
    if(isset($_GET['username'])&&isset($_GET['password'])&&isset($_GET['role'])){
        $usr = $_GET['username'];
        $pas = $_GET['password'];
        $rol = $_GET['role'];
        
        
        $sql = "INSERT INTO users VALUES (null, '".$usr."', '".$pas."', '".$rol."')";

        if($query = mysqli_query($connect, $sql) ) {
            header("location: ./dashboard.php");
        } else {
            header("location: ./add_user.php");
}
    }


?>

</body>
</html>