<?php
session_start();
include 'dbcon.php';
include 'header/stu-header.php';
$id = $_SESSION['deptid'];
$sl = 1;
$sql = "SELECT * FROM work where stuid='$id'";
$qry = mysqli_query($connection, $sql);
?>

<div style="width: 800px; margin: 0 auto">
	<?php
		if($qry){
			if (mysqli_num_rows($qry) > 0) {
		                while ($row = mysqli_fetch_assoc($qry)) {
		                	?>
		                	<h4><?php echo $sl++.". "; echo $row['name'];?></h4>
		                	<p><?php echo $row['details'];?></p>
		                	<?php 
		                }
		            }
		}
	?>
</div>