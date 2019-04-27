


<!DOCTYPE html>
<html>
<head>
  <title></title>
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



.dropbtn1 {
  background-color:  #333;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar1 a:hover, .dropdown1:hover .dropbtn1 {
  background-color: black;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content1 a:hover {
  background-color: #ddd;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}

 .container{
      margin-top:20px;
       }









.dropbtn2 {
  background-color:  #333;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown2 {
  float: left;
  overflow: hidden;
}

.dropdown2 .dropbtn2 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar2 a:hover, .dropdown1:hover .dropbtn2 {
  background-color: black;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content2 a:hover {
  background-color: #ddd;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
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

  <ul>

    


   <li><a class="active" href="admin-dash.php">Dashboard</a></li>
  
  <li><a href="Applying-History.php">Applying History</a></li>



  <div class="dropdown2">
    <button class="dropbtn2">Notice 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content2">
        <a href="admin-notice.php">Member Notice</a>
      <a href="public-notice.php">Public Notice</a>
     
      
    </div>
</div>

 
<div class="dropdown2">
    <button class="dropbtn2">Result 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content2">
        <a href="Update.php">Update</a>
      <a href="FinalList.php">Final List</a>
     
      
    </div>
</div>



<div class="dropdown1">
    <button class="dropbtn1">Wing 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content1">
       <a href="society.php">IT Committee 2019-20</a>
      <a href="sports.php">Sports</a>
      <a href="cultural-wing.php">cultural</a>
      <a href="Event-wing.php">Event</a>
      <a href="programming-wing.php">Programming</a>
      <a href="Robotics-wing.php">Robotics</a>
      <a href="Academic-wing.php">Academic</a>
      <a href="Finance-wing.php">Finance</a>
      <a href=Relational-wing.php>Relational</a>
      <a href="publication-wing.php">Publication</a>
     
    </div>
  </div> 


   
   <li style="float: right;"><a href="admin-logout.php" style="float: right; color:red;">logout</a></li>
</ul>