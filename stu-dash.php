<?php
session_start();

if (isset($_SESSION['uid'])) {
    echo " ";
} else {
    header('location:stulogin.php ');
}
?>

<?php include 'header/stu-header.php' ?>


<div class="body">

    <img src=" image/vrsty.jpg" height="290px" width="1226px">

</div>
<marquee>
    <h1 style="color: blue;">
        <center>Wellcome Student</center>
    </h1>
</marquee>

<?php include 'footer/stu-footer.php' ?>