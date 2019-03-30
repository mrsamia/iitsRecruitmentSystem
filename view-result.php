<?php
session_start();
if (!isset($_SESSION['uid'])) {
	echo '<script> location.replace("index.php"); </script>';
}
?>
<?php include 'header/stu-header.php' ?>
<center>
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
<?php include 'footer/stu-footer.php' ?>