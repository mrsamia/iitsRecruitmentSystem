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
<center>
	<h3>
		<?php
		$id = $_SESSION['deptid'];
		$sql = "SELECT * FROM `applyform` where `dept-id`='$id' and `selected`=1";
		$qry = mysqli_query($connection, $sql);
	    if ($qry) {
	        if(mysqli_num_rows($qry) > 0){
	        	$row = mysqli_fetch_assoc($qry);
	        	echo "Your Position: ". $row['position'];
	        }
	    }
		?>
	</h3>
</center>
<marquee>
    <h1 style="color: blue;">
        <center>Wellcome Student</center>
    </h1>
</marquee>

<?php include 'footer/stu-footer.php' ?>