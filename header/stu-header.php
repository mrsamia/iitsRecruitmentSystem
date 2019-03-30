 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
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
	if(isset($_GET['msg'])){
		echo "<center>".$_GET['msg']."</center>";
	}
	?>

	<ul>
		<li><a href="stu-dash.php">Dashboard</a></li>
		<li><a href="stu-notice.php">Notice</a></li>
		<li><a href="#view-result.php">View Result</a></li>
		<li><a href="#stu-pay.php">Pay</a></li>
		<h4><a href="stu-logout.php" style="float: right; color:red;">logout</a></h4>
		
	</ul>