 <?php
 if(!isset($_SESSION['uid'])){
 	echo '<script> location.replace("stulogin.php"); </script>';
 }
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		
 	</title>
 	<link rel="stylesheet" href='css/bootstrap.css'>
 	<style>

 	ul {
 		list-style-type: none;
 		margin: 0;
 		padding: 0;
 		overflow: hidden;
 		background-color: #333;
 	}

 	li {
 		float: left;
 	}

 	li a {
 		display: block;
 		color: white;
 		text-align: center;
 		padding: 14px 16px;
 		text-decoration: none;
 	}

 	li a:hover {
 		background-color: #111;
 	}
 	form{
 		border: 3px solid black;
 		box-sizing: border-box;
 		width:60%;
 		margin-left: auto;
 		margin-right: auto;

 	}
 	input
  {
      width: 300px;
      border: 1px solid black;
      padding: 10px;
  }
 	 .container{
          margin-top:20px;
        }
 </style>
 
</head>

<body>
	<h3 align="right" style="margin-right:20px;"></h3>
	<h1><center>IITS Recruitment System</center></h1>
	<?php
	include 'dbcon.php';
	if(isset($_GET['msg'])){
    echo "<script>alert('".$_GET['msg']."')</script>";
  }
	?>
	
	<?php
		$id = $_SESSION['deptid'];
		$sql = "SELECT * FROM `applyform` where `dept-id`='$id' and `selected`=1";
		$qry = mysqli_query($connection, $sql);
	    if ($qry) {
	        if(mysqli_num_rows($qry) > 0){
	            ?>
	            <ul>
					<li><a href="stu-dash.php">Dashboard</a></li>
					<li><a href="stu-notice.php">Notice</a></li>
					<li><a href="work.php">Work</a></li>
					<li><a href="member.php">Members</a></li>
					<li  style="float: right;"><a href="stu-logout.php" style="float: right; color:red;">logout<?php echo ' '.$_SESSION['deptid'];?></a></li>
				</ul>
	            <?php
	        }
	        else
	        {
	        	?>
	        	<ul>
					<li><a href="stu-dash.php">Dashboard</a></li>
					
					
					
					<li  style="float: right;"><a href="stu-logout.php" style="float: right; color:red;">logout<?php echo ' '.$_SESSION['deptid'];?></a></li>
				</ul>
	        	<?php
	        }
	    }
	?>


	