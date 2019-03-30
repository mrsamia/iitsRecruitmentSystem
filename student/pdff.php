<style>

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
    
</style>




<?php
if(isset($_GET['id'])){
	include 'dbcon.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM `applyform` WHERE ID='$id'";
	$qry = mysqli_query($connection, $sql);
	if($qry){
		if(mysqli_num_rows($qry)>0){
			$row = mysqli_fetch_assoc($qry);
		}		
	}
}
?>






	

<?php include ('header/admin-header.php');?>



<div class="container" id="getp">

		
	

<form  action="apply-form.php" method="post">
	<h1><center>Executive Membership Form of IUBAT IT Society</center></h1>
	
<table style="margin: 0 auto">
	<tr>
		<td>Position applied for:</td>
		<td> <input type="text" name="position" value="<?php echo $row['position']?>"></td>
			
	</tr>
	<tr>
		<td>Applicant's Name:</td>
		<td>
			<input type="text" name="position"value="<?php echo $row['name']?>">
		</td>
	</tr>
	<tr>
		<td>ID:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['dept-id']?>">
		</td>
	</tr>
	<tr>
		<td>Program:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['Program']?>">
		</td>
	</tr>
	<tr>
		<td>Current CGPA:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['CGPA']?>">
		</td>
	</tr>
	<tr>
		<td>Current Address:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['Address']?>">
		</td>
	</tr>
	<tr>
		<td>Contact No.:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['Contact']?>">
		</td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['E-mail']?>">
		</td>
	</tr>
	<tr>
		<td>Facebook User Name:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['Facebook']?>">
		</td>
	</tr>
	<tr>
		<td>Current association with any other clubs/socities of IUBAT:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['association']?>">
		</td>
	</tr>
	<tr>
		<td>Past Experience:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['Experience']?>">
		</td>
	</tr>
	<tr>
		<td>Reason for choosing this position:</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['choosing-position']?>">
		</td>
	</tr>
	<tr>
		<td>How would you serve IITS?</td>
		<td>
			<input type="text" name="position" value="<?php echo $row['serve']?>">
		</td>
	</tr>

	
</table>
</form>
</div>
<div style="width: 50px; margin: 0 auto; margin-top:10px; "><button onclick="prnt()">print</button></div>

</body>
<script>
	function prnt(){
		var div="<html><head><style> .hideforpdf{display: none;}td{text-align:center;}table{border: 1px solid black;float: center;}table tr{border: 1px solid black;}table tr td{border: 1px solid black;}table tr th{border: 1px solid black;}</style></head><body>"
		div+=document.getElementById('getp').innerHTML;
		div+="</body></html>"
		var win=window.open("", "", "width=960,height=500");
		win.document.write("<center><h1>Student Information</h1></center><br><br>");
		win.document.write(div);
		win.document.write("<br><br><center><p>&copy All Rights Reserved By Samia</p><p>Developed By samia</p></center>");
		win.print();
	}
</script>
</html>




<?php

include('dbcon.php');
//insert code
if(isset($_POST['submit'])){

$position=$_POST['position'];
$name=$_POST['name'];
$deptid=$_POST['dept-id'];
$Program=$_POST['Program'];
$CGPA=$_POST['CGPA'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Email=$_POST['E-mail'];
$Facebook=$_POST['Facebook'];
$association=$_POST['association'];
$Experience=$_POST['Experience'];
$chsingpsition=$_POST['choosing-position'];
$serve=$_POST['serve'];

$sql="INSERT INTO applyform (`position`,`name`,`dept-id`,`Program`,`CGPA`,`Address`,`Contact`,`E-mail`,`Facebook`,`association`,`Experience`,`choosing-position`,`serve`) VALUES('$position','$name','$deptid','$Program','$CGPA','$Address','$Contact','$Email','$Facebook','$association','$Experience','$chsingpsition','$serve')";

$qry=mysqli_query($connection,$sql);
if ($qry) {
	
	echo " successfully submitted";
}
else{
	echo "not insert";
}
}

?>