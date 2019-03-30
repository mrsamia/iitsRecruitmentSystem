<style>

 input
  {
      
      border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;
    
  }
  form{
      border: 3px solid black;
      box-sizing: border-box;
      width:80%;
      margin-left: auto;
      margin-right: auto;
      padding-bottom: 15px;

    }



  .pic{

  	width: 150px;
  	height: 150px;
    border: 3px solid black;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;

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

	<div class="pic" >
			
		</div>

	
<table style="margin: 0 auto">
	<tr>
		<td>
			<b>Position applied for:</b>
			<input type="text" size="50" name="position" value="<?php echo $row['position']?>">
		</td>
		<td class="space">
			<b>Applicant's Name:</b>
			<input type="text" size="30" name="position"value="<?php echo $row['name']?>">
		</td>

		<td >
			<b>ID:</b>
			<input type="text" name="position" value="<?php echo $row['dept-id']?>">
		</td>
	</tr><br><br>





	<tr>

		<td >
			<b>Program:</b>
			<input type="text" size="20" name="position" value="<?php echo $row['Program']?>">
		
			<b>Current CGPA:</b>
			<input type="text" size="10"  name="position" value="<?php echo $row['CGPA']?>">

			
		</td>

		<td><b>Contact No.:</b>
	
			<input type="text" name="position" value="<?php echo $row['Contact']?>"></td>
<td class="space"><b>E-mail:</b>
		
			<input type="text" name="position" value="<?php echo $row['E-mail']?>"></td>
		
	</tr>


	<tr>
		
		
		

			<td class="space"><b>Facebook User Name:</b>
		
			<input type="text" size="50" name="position" value="<?php echo $row['Facebook']?>"></td>
		
		
	</tr>


	<tr>
		
	
		<td ><b>Current association with any other clubs/socities of IUBAT:</b>
		
			<input type="text" size="30" name="position" value="<?php echo $row['association']?>"></td>
		
	</tr>


	<tr>
		<td><b>Past Experience:</b>
		
			<input type="text" size="20"name="position" value="<?php echo $row['Experience']?>"></td>
		
	

		<td class="space"><b>Reason for choosing this position:</b>
		
			<input type="text" name="position" value="<?php echo $row['choosing-position']?>"></td>
		
	</tr>


	<tr>
		<td><b>How would you serve IITS?</b>
	
			<input type="text" sname="position" value="<?php echo $row['serve']?>"></td>
		
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


















//new pdf code td chara







<style>


  form{
      border: 3px solid black;
      box-sizing: border-box;
      width:80%;
      margin-left: auto;
      margin-right: auto;
      padding-bottom: 15px;

    }
 


  .pic{

  	width: 150px;
  	height: 150px;
    border: 3px solid black;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;

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

	<div class="pic" >
			
		</div>

			<b>Position applied for:</b>
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="50" name="position" value="<?php echo $row['position']?>">

			<b>Applicant's Name:</b>
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="30" name="name"value="<?php echo $row['name']?>">

			<b>ID:</b>
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"name="dept-id" value="<?php echo $row['dept-id']?>">

			<b>Program:</b>
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="20" name="Program" value="<?php echo $row['Program']?>">

			<b>Current CGPA:</b>
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="10"  name="CGPA" value="<?php echo $row['CGPA']?>">

			<b>Contact No.:</b>
	
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"name="Contact" value="<?php echo $row['Contact']?>">

			<b>E-mail:</b>
		
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"name="Contact" value="<?php echo $row['E-mail']?>">

			<b>Facebook User Name:</b>
		
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"size="50" name="Facebook" value="<?php echo $row['Facebook']?>">

			<b>Current association with any other clubs/socities of IUBAT:</b>
		
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="65" name="association" value="<?php echo $row['association']?>">

			<b>Past Experience:</b>
		
			<input type="text"style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="90"name="Experience" value="<?php echo $row['Experience']?>">

			<b>Reason for choosing this position:</b>
		
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"size="80" name="choosing-position" value="<?php echo $row['choosing-position']?>">

			<b>How would you serve IITS?</b>
	
			<input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"size="90" sname="serve" value="<?php echo $row['serve']?>">
<br>
<br>


<input type="submit" name="submit" value="select student">

	

</form>
</div>
<div style="width:250px; margin: 0 auto; margin-top:10px; ">
	
	<button style="margin-top: 20px; margin-left: 140px;" onclick="prnt()">print</button></div>

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

	$deptid=$_POST['dept-id'];
	$name=$_POST['name'];
	$position=$_POST['position'];

	$sql="INSERT INTO selected_student (`dept-id`,`name`,`position`) VALUES('$deptid','$name','$position')";

	$qry=mysqli_query($connection,$sql);
	if ($qry) {

		echo "inserted";
		
	}
	else{
		echo "not insert";
	}
}

?>























