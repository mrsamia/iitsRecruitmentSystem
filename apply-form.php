<style type="text/css">
    .pic {

        width: 150px;
        height: 150px;
        border: 3px solid black;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;


    }
</style>


<?php include 'header/stu-header.php' ?>

<div class="container">

    <form action="apply-form.php" method="post">
        <h1>
            <center>Executive Membership Form of IUBAT IT Society</center>
        </h1>

        <div class="pic">

        </div>

        <table>
            <tr>
                <td>Position applied for:</td>
                <td><input type="text" name="position" required><br><br></td>
            </tr>


            <tr>
                <td>Applicant's Name:</td>
                <td><input type="text" name="name" required><br><br></td>
            </tr>

            <tr></tr>
            <td>ID:</td>
            <td><input type="text" name="dept-id" required><br><br></td>
            </tr>

            <tr>
                <td>Program:</td>
                <td><input type="text" name="Program" required><br><br></td>
            </tr>


            <tr>
                <td>Applied for which wing:</td>
                <td><input type="text" name="wing" required><br><br></td>
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

    $sql = "INSERT INTO applyform (`position`,`name`,`dept-id`,`Program`,`wing`,`CGPA`,`Address`,`Contact`,`E-mail`,`Facebook`,`association`,`Experience`,`choosing-position`,`serve`) VALUES('$position','$name','$deptid','$Program','$wing','$CGPA','$Address','$Contact','$Email','$Facebook','$association','$Experience','$chsingpsition','$serve')";

    $qry = mysqli_query($connection, $sql);
    if ($qry) {

        echo("<script>alert('Successfully Submitted Result')</script>");
        header("Location: /INTERNproject/stu-dash.php?msg=Successfully Submitted Result");
    } else {
        echo "not insert";
    }
}

?>