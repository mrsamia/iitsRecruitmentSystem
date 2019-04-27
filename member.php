<?php
session_start();
 if(!isset($_SESSION['uid'])){
 	echo '<script> location.replace("stulogin.php"); </script>';
 }
 include 'header/stu-header.php';
?>
<?php
include 'dbcon.php';
$wing = $_SESSION['wing'];
$sql = "SELECT * FROM `applyform` WHERE `wing`='$wing'";
$qry = mysqli_query($connection, $sql);

?>
<center><div style="margin-top: 30px"><h3>Your Wing Members</h3></div></center>
<div style="width:70%; margin: 0 auto; margin-top: 30px">
	<table style="border: 1px solid #b5f5ec" class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>ID</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Position</th>
				

			</tr>
			<?php
				if($qry){
			if (mysqli_num_rows($qry) > 0) {
		                while ($row = mysqli_fetch_assoc($qry)) {
		                	?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['dept-id']?></td>
				<td><?php echo $row['E-mail']?></td>
				<td><?php echo $row['Contact']?></td>
				<td><?php echo $row['position']?></td>

			</tr>
        	<?php
        }
    }
}
        	?>
		</thead>
	</table>
</div>