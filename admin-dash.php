<?php
session_start();

if (isset($_SESSION['uid'])) {
    echo " ";
} else {
    header('location:adminlogin.php ');
}

?>


<?php include('header/admin-header.php'); ?>


<div class="body">

    <img src=" image/vrsty.jpg" height="290px" width="1366px">

</div>
<marquee>
    <h1 style="color: blue;">
        <center>Wellcome Admin</center>
    </h1>
</marquee>

</body>
</html>
