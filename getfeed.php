<?php
session_start();
 if(!isset($_SESSION['uid'])){
 	echo '<script> location.replace("stulogin.php"); </script>';
 }
 include 'header/admin-header.php';
?>
<?php
include 'dbcon.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `work` WHERE `stuid`='$id' ORDER BY date desc";
$qry = mysqli_query($connection, $sql);

?>
<center><div style="margin-top: 30px"><h3>Feedback</h3></div></center>
<div style="width: 1200px; margin: 0 auto; margin-top: 30px">
	<table style="border: 1px solid #b5f5ec" class="table">
		<thead>
			<tr>
				<th>Work Title</th>
				<th>Work Details</th>
				<th>Feedback</th>
				<th>Assign Date</th>
			</tr>
			<?php
				if($qry){
			if (mysqli_num_rows($qry) > 0) {
		                while ($row = mysqli_fetch_assoc($qry)) {
		                	?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['details']?></td>
				<td><?php echo $row['feed']?></td>
				<td style="width: 150px"><?php echo $row['date']?></td>
			</tr>
        	<?php
        }
    }
}
        	?>
		</thead>
	</table>
</div>