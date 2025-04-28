<h1>Admin</h1>
<a href="./logout.php">
    <button>logout</button>
</a>
<br>
<hr>
<a href="./add_user.php">
    <button>Add User</button>
</a>
<table border="1" >
   <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php
        $sql = "SELECT * FROM users";
        $query = mysqli_query ($connect,$sql) or die ("ERR query user!");
        while($user_arr = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $user_arr['uid'];?></td>
            <td><?php echo $user_arr['username'];?></td>
            <td><?php echo $user_arr['role'];?></td>
            <td>
                <a href="./edit_user.php?uid=<?php echo $user_arr['uid'];?>">              
                <button>Edit</button>
                </a>
                <a href="./delete_user.php?uid=<?php echo $user_arr['uid'];?>">              
                <button>Delete</button>
                </a>
            </td>
        <?php
        }
    ?>
</table>

