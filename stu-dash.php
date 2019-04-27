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

    <img src=" image/vrsty.jpg" height="290px" width="1350px">

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
	        	echo " Wing: ". $row['wing'];
	        	echo "<br>";
	        	echo "Your Position: ". $row['position'];
	        }
	    }
		?>
	</h3>



<h1>
	<?php
		$id = $_SESSION['deptid'];
		$sql = "SELECT * FROM `applyform` where `dept-id`='$id'";
		$qry = mysqli_query($connection, $sql);
	    if ($qry) {
	        if(mysqli_num_rows($qry) > 0){
	        	$row = mysqli_fetch_assoc($qry);
	        	if($row['selected'] != '1'){
	        		echo "You are not selected. Contact Department For More Info";
	        	}
	        }
	    }
		?>
		</h1>




</center>
<marquee>
    <h1 style="color: blue;">
        <center>Wellcome Student</center>
    </h1>
</marquee>

<?php include 'footer/stu-footer.php' ?>