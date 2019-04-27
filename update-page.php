


<?php

include 'dbcon.php';
include('header/admin-header.php');

$id=$_GET['id'];
$sql = "SELECT * FROM `applyform` where `id`='$id'";
$qry=mysqli_query($connection, $sql);
if (mysqli_num_rows($qry) > 0) {
            $row = mysqli_fetch_assoc($qry);
        }


?>
<h1 align="center" style="color: red;">Update Position</h1>
<!-- <input type="text" class="form-control" name="id" placeholder="Enter University ID *" required> -->
<div style="width: 600px; margin: 0 auto; padding: 30px; margin-top: 30px">
    <form action="" method="GET">
        <table>
            <tr>
                <td style="padding: 20px;">
                    Dept-ID: 
                </td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $row['dept-id']?>" name="dept-id" readonly="true" >
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                     Seleclted Name: 
                </td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $row['name']?>" name="name" readonly="true" >
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                    Position:
                </td>
                <td>
                    <select required class="form-control" name="position">
                    <option value="" disabled selected hidden>Please Choose...</option>
                    <option value="President">President</option>
                    <option value="Vice.President">Vice President</option>
                    <option value="General.Secretary">General Secretary</option>
                    <option value="Organizing.Secretary">Organizing Secretary</option>
                    
                    <option value="Manager">Manager</option>
                    <option value="Asst. Manager">Asst. Manager</option>
                    <option value="Deputy Manager">Deputy Manager</option>
                    <option value="Assistant">Assistant</option>
                    </select>

                     
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                    Wing:
                </td>
                <td>
                   <select required class="form-control" name="wing">
                    <option value="" disabled selected hidden>Please Choose...</option>
                    <option value="Sports">Sports</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Academic">Academic</option>
                    <option value="Event">Event</option>
                    <option value="Robotics">Robotics</option>
                    <option value="Programming">Programming</option>
                    <option value="Finance">Finance</option>
                    <option value="Relational">Relational</option>
                     <option value="Publication">Publication</option>
                    
                        
                    </select>
                </td>
                 
            </tr>
            <tr>
            <td><input class='btn btn-primary'
                   type="submit" name="submit" value="Update"></td>
               </tr>
                
        </table>
    </form>
</div>



<?php
include 'dbcon.php';
if(isset($_GET['submit'])){
    $deptid = $_GET['dept-id'];
    $name = $_GET['name'];
    $position = $_GET['position'];
    $wing = $_GET['wing'];

    

    $sql = "UPDATE  `applyform`  SET `position`='$position', `wing`='$wing' Where  `dept-id`='$deptid'";
    $qry = mysqli_query($connection, $sql);

    if($qry){

        echo "<script> location.replace('Update.php?msg=update Successfully!'); </script>";
    }
    else{
        echo "<script>alert('Problem To update!')</script>";
    }
    
    
}

?>