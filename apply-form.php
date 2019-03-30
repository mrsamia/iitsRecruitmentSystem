<style type="text/css">

    .pic {

        width: 150px;
        height: 150px;
        border: 3px solid gray;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;


    }
</style>

<h1>
    <center>IITS Recruitment System</center>
</h1>
<?php include 'sidebar.php' ?>


<div style="width: 800px; margin: 0 auto" class="container">

    <form action="apply-form.php" method="post">
        <h1>
            <center>Executive Membership Form of IUBAT IT Society</center>
        </h1>

        <div class="pic">

        </div>

        <table>
            <tr>
                <td>Position applied for:</td>
                <td><select style="width:250px; border: 1px solid gray;padding: 10px;border-radius:8px;" 
                    name="position" required>
                     <option value="President">President</option>
                    <option value="Vice-President">Vice-President</option>
                    <option value="Manager">Manager</option>
                    <option value="Asst. Manager">Asst. Manager</option>
                     <option value="Deputi Manager">Deputi Manager</option>
                      <option value="Assitant">Assitant</option>
                </select><br><br></td>
            </tr>

            </tr>
            <td>ID:</td>
            <td><input type="text" name="dept-id" required><br><br></td>
            </tr>
            </tr>
            <td>Password:</td>
            <td><input type="text" name="password" required><br><br></td>
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


            <tr>
                <td>Applied for which wing:</td>
                <td><select style="width:250px; border: 1px solid gray;padding: 10px;border-radius:8px;"
                 name="wing" required>
                    <option value="Sports">Sports</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Academic">Academic</option>
                    <option value="Mentoring">Mentoring</option>
                    <option value="Programming">Programming</option>
                    <option value="Finance">Finance</option>
                    <option value="Relational">Relational</option>
                     <option value="Publication">Publication</option>
                    
                </select><br><br><br></td>
            </tr>

            <tr>
                <td>Current CGPA:</td>
                <td><input type="text" name="CGPA" required><br><br></td>
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


        </table>
        <input style="margin-left: 160px; margin-bottom: 10px;" class="btn btn-primary" type="submit" name="submit"
               value="submit">
    </form>
</div>

<?php include 'footer/stu-footer.php' ?>



<?php

include('dbcon.php');
//insert code
if (isset($_POST['submit'])) {

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


    $sql = "SELECT * FROM `applyform` where `dept-id`='$deptid'";
    $qry = mysqli_query($connection, $sql);
    if ($qry) {
        if(mysqli_num_rows($qry) > 0){
            echo("<script>alert('ID Is Registered')</script>");
            echo '<script> location.replace("apply-form.php"); </script>';
        }
    }

    $sql = "INSERT INTO applyform (`position`,`password`,`name`,`dept-id`,`Program`,`wing`,`CGPA`,`Address`,`Contact`,`E-mail`,`Facebook`,`association`,`Experience`,`choosing-position`,`serve`) VALUES('$position','$password','$name','$deptid','$Program','$wing','$CGPA','$Address','$Contact','$Email','$Facebook','$association','$Experience','$chsingpsition','$serve')";

    $qry = mysqli_query($connection, $sql);
    if ($qry) {

        echo("<script>alert('Successfully Submitted Result')</script>");
        echo '<script> location.replace("index.php"); </script>';
    } else {
        echo("<script>alert('Problem To Insert')</script>");
        echo '<script> location.replace("apply-form.php"); </script>';
    }
}

?>