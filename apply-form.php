<?php
$year = date('y');
    $month = date('m');

    $csem = '';
    $s_batch='';
    $e_batch='';
    $vip_batch='';


    if($month<=4){
        $csem='spring';
        $s_batch = $year-1;
        $s_batch = $s_batch.'303000';
        $e_batch = $year-3;
        $vip_batch = $e_batch.'303000';
        $e_batch = $e_batch.'103000';
    }else if($month < 8 && $month > 4){
        $csem = 'summer';
        $s_batch = $year.'103000';
        $e_batch = $year-3;
        $vip_batch = ($year-2).'103000';
        $e_batch = $e_batch.'203000';
    }else{
        $csem = 'fall';
        $s_batch = $year.'203000';
        $e_batch = $year-3;
        $vip_batch = ($year-2).'203000';
        $e_batch = $e_batch.'303000';
    }

    // echo $csem;
    // echo $e_batch;
    // echo $s_batch;

    // // $idd = 16302012;
    // // echo substr($idd, 4);
    // echo $vip_batch;

    
?>

<style type="text/css">
    .wing{
        display: none;
    }
   
</style>

<h1>
    <center>IITS Recruitment System</center>
</h1>
<?php include 'sidebar.php' ?>


<div style="width: 800px; margin: 0 auto" class="container">

    <form action="" method="post" enctype="multipart/form-data">
        <h2>
            <center>Executive Membership Form of IUBAT IT Society</center>
        </h2>

        <table>
            
            <tr>
                <td>Position applied for:</td>
                <td><select onchange="check()" onselect="check()" onfocus="check()" id='position' style="width:250px; border: 1px solid gray;padding: 10px;border-radius:8px;" 
                    name="position" required>
                    <option value="" disabled selected hidden>Please Choose...</option>
                    <option value="President">President</option>
                    <option value="Vice.President">Vice President</option>
                    <option value="General.Secretary">General Secretary</option>
                    <option value="Organizing.Secretary">Organizing Secretary</option>
                    
                    <option value="Manager">Manager</option>
                    <option value="Asst. Manager">Asst. Manager</option>
                    <option value="Deputy Manager">Deputy Manager</option>
                    <option value="Assistant">Assistant</option>
                </select><br><br></td>
            </tr>

            </tr>
            <td>ID:</td>
            <td><input type="number" name="dept-id" required><br><br></td>
            </tr>
            </tr>
            <td>Password:</td>
            <td><input type="password" name="password" required><br><br></td>
            </tr>
            <tr>
                <td>Applicant's Name:</td>
                <td><input type="text" name="name" required><br><br></td>
            </tr>

            <tr>

            <tr>
                <td>Program:</td>
                <td><input type="text" name="Program" required><br><br></td>
            </tr>


            <tr id='wing'>
                <td>Applied for which wing:</td>
                <td><select id='wingSelect' style="width:250px; border: 1px solid gray;padding: 10px;border-radius:8px;"
                 name="wing" required>
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
                    

                    
                </select><br><br><br></td>
            </tr>

            <tr>
                <td>Current CGPA:</td>
                <td><input type="number" step="0.01"  name="CGPA" required><br><br></td>
            </tr>

            <tr>
                <td>Current Address:
                <td><input type="text" name="Address" required><br><br></td>
            </tr>

            <tr>
                <td>Contact No.:</td>
                <td><input type="text" name="Contact" required><br><br></td>
            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="E-mail" required><br><br>
            </tr>
            </td>
            </tr>

            <tr>
                <td>Facebook User Name:</td>
                <td><input type="text" name="Facebook" required><br><br></td>
            </tr>

            <tr>
                <td>Current association with any other clubs/socities of IUBAT:</td>
                <td><input type="text" name="association" required><br><br></td>
            </tr>

            <tr>
                <td>Past Experience:</td>
                <td><input type="text" name="Experience" required><br><br></td>
            </tr>

            <tr>
                <td>Reason for choosing this position:</td>
                <td><input type="text" name="choosing-position" required><br><br></td>
            </tr>

            <tr>
                <td>How would you serve IITS?</td>
                <td><input type="text" name="serve" required><br><br></td>
            </tr>
            <tr >
                <td>Image Size Should Not Be More Than 1MB</td>
                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>


        </table>
        <input  style="margin-left: 160px; margin-bottom: 10px; margin-top: 20px" class="btn btn-primary" type="submit" name="submit" value="submit">
    </form>
</div>




<?php include 'footer/stu-footer.php' ?>



<?php

include('dbcon.php');
//insert code
if (isset($_POST['submit'])) {



    // 15203012<16203000 && 15203012>18303000
    if ((int)$_POST['dept-id'] < (int)$e_batch || (int)$_POST['dept-id'] > (int)$s_batch || (substr($_POST['dept-id'], 4) >= 3000 && substr($_POST['dept-id'], 4) >= 4000)) {
        echo '<script> location.replace("index.php?msg=You Are Not Eligable To Apply"); </script>';
    }else{
        if($position = $_POST['position'] == 'President' || $position = $_POST['position'] == 'Vice.President' || $position = $_POST['position'] == 'General.Secretary' || $position = $_POST['position'] == 'Organizing.Secretary'){
            if((int)$_POST['dept-id']>=(int)$vip_batch){
                echo '<script> location.replace("index.php?msg=You Are Not Eligable To Apply For This Post"); </script>';
            }
        }
    }


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imgdone=0;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo $uploadOk;
            echo '<script> location.replace("index.php?msg=Image Size Is More Than 1MB"); </script>';
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $imgdone=1;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    if ($_FILES["fileToUpload"]["size"] > 1000000 || $uploadOk==0) {
        // echo("<script>alert('')</script>");
        echo '<script> location.replace("index.php?msg=Image Size Is More Than 1MB"); </script>';
    }else{

    $position = $_POST['position'];
    $name = $_POST['name'];
    $deptid = $_POST['dept-id'];
    $Program = $_POST['Program'];
    $wing = $_POST['wing'];
    $CGPA = $_POST['CGPA'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['E-mail'];
    $Facebook = $_POST['Facebook'];
    $association = $_POST['association'];
    $Experience = $_POST['Experience'];
    $chsingpsition = $_POST['choosing-position'];
    $serve = $_POST['serve'];
    $password = $_POST['password'];
    $imgdir=$target_file;


    $sql = "SELECT * FROM `applyform` where `dept-id`='$deptid'";
    $qry = mysqli_query($connection, $sql);
    if ($qry) {
        if(mysqli_num_rows($qry) > 0){
            echo("<script>alert('ID Is Registered')</script>");
            echo '<script> location.replace("apply-form.php"); </script>';
        }
    }

    if($uploadOk!=0){
        echo $uploadOk;
        $sql = "INSERT INTO applyform (`position`,`password`,`name`,`dept-id`,`Program`,`wing`,`CGPA`,`Address`,`Contact`,`E-mail`,`Facebook`,`association`,`Experience`,`choosing-position`,`serve`, `imgdir`) VALUES('$position','$password','$name','$deptid','$Program','$wing','$CGPA','$Address','$Contact','$Email','$Facebook','$association','$Experience','$chsingpsition','$serve', '$imgdir')";
    }

    $qry = mysqli_query($connection, $sql);
    if ($qry) {

        echo("<script>alert('Successfully Submitted Result')</script>");
        echo '<script> location.replace("index.php"); </script>';
    } else {
        echo("<script>alert('Problem To Insert')</script>");
        echo '<script> location.replace("apply-form.php"); </script>';
    }
}
}

?>

<script type="text/javascript">
    var element = document.getElementById('position');
    var el = document.getElementById('wing');
    var strUser = element.options[element.selectedIndex].value;
    if(strUser == 'President' || strUser == 'Vice.President' || strUser == 'General.Secretary' || strUser == 'Organizing.Secretary'){
        el.classList.add('wing');
        document.getElementById('wingSelect').required=false;
        document.getElementById('wingSelect').value='';
    }else{
        el.classList.remove('wing');
        document.getElementById('wingSelect').required=true;
    }
    function check() {
        var element = document.getElementById('position');
        var el = document.getElementById('wing');

        var strUser = element.options[element.selectedIndex].value;
        if(strUser == 'President' || strUser == 'Vice.President' || strUser == 'General.Secretary' || strUser == 'Organizing.Secretary'){
            el.classList.add('wing');
            document.getElementById('wingSelect').required=false;
            document.getElementById('wingSelect').value='';
        }else{
            el.classList.remove('wing');
            document.getElementById('wingSelect').required=true;
            
        }
    }
</script>