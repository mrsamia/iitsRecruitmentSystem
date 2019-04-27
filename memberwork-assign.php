<?php


include('header/stu-header.php');
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

