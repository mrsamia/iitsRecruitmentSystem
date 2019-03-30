<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>

<?php
include('homeee.php');
?>


<center><h1><a>User Registration</a></h1></center>


<div>
    <center>
        <form action=" " method="post">
            <table>
                <tr>
                    <td><b>Username</b><br><br></td>
                    <br>
                    <td><input type="text" class="form-control" name="Name" placeholder=" User Name *" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td><b>PassWord</b><br><br></td>
                    <td><input type="Password" class="form-control" name="Password" placeholder=" User Password *"
                               required><br><br></td>
                </tr>
                <tr>
                    <td><b>Address</b><br><br></td>
                    <td><input type="text" class="form-control" name="Address" placeholder=" User Address *"
                               required><br><br></td>
                </tr>
                <tr>
                    <td><b>Phone Number</b><br><br></td>
                    <td><input type="Phone" class="form-control" name="Phone" placeholder="Phone Number *" required><br>
                        <br></td>
                </tr>

            </table>
            <input style="width: 100px;" type="submit" class="btn btn-primary" name="submit" value="Register">
        </form>

    </center>
</div>
</body>
</html>


<?php

include('dbcon.php');

//insert code
if (isset($_POST['submit'])) {


    $Username = $_POST['Name'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $sql = "INSERT INTO registration (`Name`,`Password`,`Address`,`Phone`) VALUES('$Username','$Password','$Address','$Phone')";
    $qry = mysqli_query($connection, $sql);
    if ($qry) {

        header("Location: stulogin.php?msg=Registration Completed");
    } else {
        $error = "Location: registration.php?msg=Registration Not Completed. Error: " . mysqli_error($connection);
        header($error);
    }
}

?>