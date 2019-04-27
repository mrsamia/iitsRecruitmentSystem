<?php
session_start();
include 'dbcon.php';
if(!isset($_SESSION['uid'])){
	echo '<script> location.replace("stu-dash.php"); </script>';
}
$id=$_GET['id'];
$sql = "SELECT * FROM `applyform` where `id`='$id'";
$qry=mysqli_query($connection, $sql);
if (mysqli_num_rows($qry) > 0) {
        	$row = mysqli_fetch_assoc($qry);
        }

include('header/admin-header.php');
?>

<!-- <input type="text" class="form-control" name="id" placeholder="Enter University ID *" required> -->
<div style="width: 600px; margin: 0 auto; padding: 30px; margin-top: 30px">
	<form action="" method="GET">
		<table>
			<tr>
				<td style="padding: 20px;">
					ID: 
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['dept-id']?>" name="stuid" readonly="true" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Name: 
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['name']?>" name="name" readonly="true" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Wing:
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['wing']?>" name="wing" readonly="true"  required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Position:
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['position']?>" name="position" readonly="true" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Date:
				</td>
				<td>
					<input type="date" class="form-control" name="date" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Work Title:
				</td>
				<td>
					<input style="width: 400px" type="text" class="form-control" name="work_name" placeholder="Enter Work Title *" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Work To Do:
				</td>
				<td>
					<textarea type="text" class="form-control" name="work" placeholder="Enter Work Details *" required></textarea>
				</td>
			</tr>
			<tr>
				<td style="padding: 40px;" > 
					
				</td>
				<td>
					<input type="submit" name="submit" value="Assign" class="btn btn-primary">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php
include 'dbcon.php';
if(isset($_GET['submit'])){
	$name = $_GET['work_name'];
	$date = $_GET['date'];
	$details = $_GET['work'];
	$stuid = $_GET['stuid'];
	$wing = $_GET['wing'];

	$sql = "INSERT INTO `work`(`name`, `details`, `date`, `stuid`) VALUES ('$name', '$details', '$date', '$stuid')";
	$qry = mysqli_query($connection, $sql);
	
	
	if($qry){
		switch ($wing) {
			case 'Academic':
				echo "<script> location.replace('Academic-wing.php?msg=Work Assigned Successfully!'); </script>";
				break;
			case 'Mentoring':
				break;
			case 'Programming':
				echo "<script> location.replace('programming-wing.php?msg=Work Assigned Successfully!'); </script>";
				break;
		}
		echo "<script>alert('Work Assigned Successfully!')</script>";
	}else{
		switch ($wing) {
			case 'Academic':
				echo "<script> location.replace('Academic-wing.php?msg=Work Assigned Successfully!'); </script>";
				break;
			case 'Mentoring':
				break;
			case 'Programming':
				echo "<script> location.replace('programming-wing.php?msg=Work Assigned Successfully!'); </script>";
				break;
		}
		echo "<script>alert('Problem To Assign Work!')</script>";
	}
}

?>
