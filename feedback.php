<?php
session_start();
include 'dbcon.php';

$id=$_GET['id'];
$sql = "SELECT * FROM work where id='$id'";
$qry=mysqli_query($connection, $sql);
if (mysqli_num_rows($qry) > 0) {
        	$row = mysqli_fetch_assoc($qry);
        }

include 'header/stu-header.php';
?>

<h1 align="center" style=" color: red;">Feedback</h1>

<!-- <input type="text" class="form-control" name="id" placeholder="Enter University ID *" required> -->
<div style="width: 1200px; margin: 0 auto; padding: 30px; margin-top: 30px">
	<form style="border: none;" action="" method="GET">
		<table>
			<tr>
				<td style="padding: 20px;">
					Feedback ID: 
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['id']?>" name="id" readonly="true" required>
				</td>
			</tr>

			<tr>
				<td style="padding: 20px;">
					Student ID: 
				</td>
				<td>
					<input type="text" class="form-control" value="<?php echo $row['stuid']?>" name="stuid" readonly="true" required>
				</td>
			</tr>
			
			<tr>
				<td style="padding: 20px;">
					Date:
				</td>
				<td>
					<input type="date" class="form-control" name="date" value="<?php echo $row['date']?>" readonly="true" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Work Title:
				</td>
				<td>
					<input style="width: 400px" type="text" class="form-control" name="name" value="<?php echo $row['name']?>" readonly="true" required>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Work To Do:
				</td>
				<td>
					<textarea type="text" class="form-control" name="work" readonly="true" required><?php echo $row['details']?></textarea>
				</td>
			</tr>
			<tr>
				<td style="padding: 20px;">
					Give Feedback:
				</td>
				<td>
					<textarea type="text" class="form-control" name="feedback" placeholder="Give Your Feedback" required></textarea>
				</td>
			</tr>

			<tr>
				<td style="padding: 40px;"> 
					
				</td>
				<td>
					<input type="submit" name="submit" value="Feedback" class="btn btn-primary">
				</td>
			</tr>
		</table>
	</form>
</div>


<?php
if(isset($_GET['submit'])){
	include 'dbcon.php';
	$feed = $_GET['feedback'];
	$id = $_GET['id'];
	$sql = "UPDATE `work` SET `feed` = '$feed', `feed_status`=1 WHERE `work`.`id` = '$id'";

	$qry = mysqli_query($connection, $sql);
	if($qry){
		echo '<script> location.replace("work.php?msg=Feedback Send"); </script>';
	}else{
		echo '<script> location.replace("feedback.php?id=$id"); </script>';
	}
}


?>