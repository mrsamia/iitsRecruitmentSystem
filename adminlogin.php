<?php
session_start();

if (isset($_SESSION['uid'])) {

    header('location:admin-dash.php');
}


?>


<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
<?php
include('homeee.php');
?>

<h1>
    <center>Admin Login</center>
</h1>

<form action="" method="Post">
    <table align="center">
        <tr>
            <td><b>Username</b><br><br></td>
            <td><input type="text" class="form-control" name="username" placeholder="Enter Admin Username *"
                       required><br><br></td>
            <br><br>
        </tr>
        <tr>
            <td><b>Password</b><br><br></td>
            <td><input type="Password" class="form-control" name="password" placeholder="Enter Admin Password *"
                       required><br><br></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input style="width: 100px;" class="btn btn-primary" type="submit" name="submit" value="Login">
            </td>
        </tr>

    </table>
</form>

</body>
</html>


<?php

include('dbcon.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($connection, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert('usernameor password not match!!');
            //window.open('login.php','_self');
        </script>

        <?php
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        echo "id=" . $id;

        $_SESSION['uid'] = $id;
        header('location:admin-dash.php');
    }

}

?>
