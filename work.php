




<?php
session_start();
include 'dbcon.php';
include 'header/stu-header.php';
$id = $_SESSION['deptid'];
$sl = 1;
$sql = "SELECT * FROM work where stuid='$id' order by date desc";
$qry = mysqli_query($connection, $sql);
?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css" >

        table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  padding: 20px;
}

    </style>
</head>
<body>



<h1 align="center" style="color: red;">Assigned Work</h1>


<div class="container" id='getp'>
<table class="table" align="center" width="60%">

        <thead>
        <tr>
            <td><b>SL</b></td>
            <td><b>Date</b></td>
            <td><b>Work Title</b></td>
            <td><b>Work Details</b></td>
            <td><b>Feedback</b></td>
            

        </tr>
        </thead>




<div style="width: 800px; margin: 0 auto">
	<?php
	$SL = 0;
		if($qry){
			if (mysqli_num_rows($qry) > 0) {
		                while ($row = mysqli_fetch_assoc($qry)) {
		                	?>


<tr>

                    <td><?php

                        $SL = $SL + 1;
                        echo $SL; ?></td>

                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["details"]; ?></td>
                    <?php
                        if($row['feed_status'] == 0){
                            ?>
                            <td><a href="feedback.php?id=<?php echo $row['id']?>">Feedback</a></td>
                            <?php
                        }else{
                            ?>
                            <td>Done</td>
                            <?php
                        }
                    ?>
                    

                </tr>




		                	
		                	<?php 
		                }
		            }
		}
	?>


</div>
</div>
</table>
