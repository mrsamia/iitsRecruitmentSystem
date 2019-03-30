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
                <td><b>University ID</b><br><br></td>
                <td><input type="text" class="form-control" name="id" placeholder="Enter University ID *" required><br><br>
                </td>
                <br><br>
            </tr>


            <tr>
                <td><b>Password</b><br><br></td>
                <td><input type="Password" class="form-control" name="password" placeholder="Enter Student Password *"
                           required><br><br></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input style="width: 100px; margin: 0 auto; padding: 10px" class="btn btn-primary" type="submit" name="submit" value="Login"/><br><br></td>
            </tr>
        </table>
    </form>

    </body>
    </html>


<?php

include('dbcon.php');


if (isset($_POST['submit'])) {
    $Username = $_POST['id'];
    $Password = $_POST['password'];
    $qry = "SELECT * FROM `applyform` WHERE `dept-id`='$Username' AND `Password`='$Password'";
    $run = mysqli_query($connection, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert('usernameor password not match!!');
        </script>

        <?php
    } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['dept-id'];
        echo "id=" . $id;

        $_SESSION['uid'] = $id;
        $_SESSION['deptid'] = $data['dept-id'];
        $_SESSION['name'] = $data['name'];
        echo '<script> location.replace("stu-dash.php"); </script>';
    }

}

?>