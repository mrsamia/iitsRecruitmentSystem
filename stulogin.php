<?php
session_start();

if (isset($_SESSION['uid'])) {

    echo '<script> location.replace("stu-dash.php"); </script>';
}


?>

    <?php
    include('homeee.php');
    ?>


    <h1>
        <center>Student Login</center>
    </h1>

    <form action="" method="Post">
        <table align="center">
            <tr>
                <td><b>Username</b><br><br></td>
                <td><input type="text" class="form-control" name="Name" placeholder="Enter Student Username *" required><br><br>
                </td>
                <br><br>
            </tr>


            <tr>
                <td><b>Password</b><br><br></td>
                <td><input type="Password" class="form-control" name="Password" placeholder="Enter Student Password *"
                           required><br><br></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input style="width: 100px; margin: 0 auto; padding: 10px" class="btn btn-primary" type="submit" name="submit" value="Login"/><br><br></td>
            </tr>

        </table>
        <h3 align="center" style="margin-right:20px;"><a href="registration.php"> click here for registration</a></h3>
    </form>

    </body>
    </html>


<?php

include('dbcon.php');


if (isset($_POST['submit'])) {
    $Username = $_POST['Name'];
    $Password = $_POST['Password'];
    $qry = "SELECT * FROM `registration` WHERE `Name`='$Username' AND `Password`='$Password'";
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
        echo '<script> location.replace("stu-dash.php"); </script>';
    }

}

?>