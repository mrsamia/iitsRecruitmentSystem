<?php
session_start();

if (isset($_SESSION['uid'])) {

    header('location:stu-dash.php');
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
        <center>Member Login</center>
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
        
    </form>

    </body>
    </html>


