

<style>


    form {
        border: 3px solid black;
        box-sizing: border-box;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 15px;


    }


    .pic {

        width: 150px;
        height: 150px;
        border: 3px solid black;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;

    }


</style>


<?php
if (isset($_GET['id'])) {
    include 'dbcon.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `applyform` WHERE ID='$id'";
    $qry = mysqli_query($connection, $sql);
    if ($qry) {
        if (mysqli_num_rows($qry) > 0) {
            $row = mysqli_fetch_assoc($qry);
        }
    }
}
?>








<?php include('header/admin-header.php'); ?>


<div class="container" id="getp">


    <form action="" method="post">
        <h1>
            <center>Executive Membership Form of IUBAT IT Society</center>
        </h1>

        <div class="pic">

        </div>
        <b>Apply ID:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="8" name="ID" value="<?php echo $row['ID'] ?>">


        <b>Position applied for:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="25" name="position" value="<?php echo $row['position'] ?>">

        <b>Applicant's Name:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="30" name="name" value="<?php echo $row['name'] ?>">

        <b>ID:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" name="dept-id" readonly="true" value="<?php echo $row['dept-id'] ?>">

        <b>Program:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="20" name="Program" value="<?php echo $row['Program'] ?>">


        <b>Applied for which wing:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" name="wing" value="<?php echo $row['wing'] ?>">


        <b>Current CGPA:</b>
        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="10" name="CGPA" value="<?php echo $row['CGPA'] ?>">

        <b>Contact No.:</b>

        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" name="Contact" readonly="true" value="<?php echo $row['Contact'] ?>">

        <b>E-mail:</b>

        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="55"  name="Contact" readonly="true" value="<?php echo $row['E-mail'] ?>">

        <b>Facebook User Name:</b>

        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" size="50" readonly="true" name="Facebook" value="<?php echo $row['Facebook'] ?>">

        <b>Current association with any other clubs/socities of IUBAT:</b>

        <input type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" size="110" name="association" value="<?php echo $row['association'] ?>">

        <b>Past Experience:</b>

        <textarea type="textarea" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" readonly="true" rows="3" cols="120"
                  name="Experience"><?php echo $row['Experience'] ?></textarea>

        <b>Reason for choosing this position:</b>

        <textarea type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;" rows="3" cols="120"readonly="true"
                  name="choosing-position"><?php echo $row['choosing-position'] ?></textarea>

        <b>How would you serve IITS?</b>

        <textarea type="text" style="border-bottom: 1px  dotted;
      border-top: none;
      border-left: none;
      border-right:none;"  readonly="true" rows="3" cols="120"
                  name="serve"><?php echo $row['serve'] ?></textarea>
        <br>
        <br>


        <input style="margin-left: 390px;" class="btn btn-primary" type="submit" name="submit" value="select student">


    </form>
</div>
<div style="width:250px; margin: 0 auto; margin-top:10px; ">

    <button style="margin-top: 10px; margin-left: 120px;" onclick="prnt()"  class="btn btn-primary">print PDF</button>
</div>

</body>
<script>
    function prnt() {
        var div = "<html><head><style> .hideforpdf{display: none;}td{text-align:center;}table{border: 1px solid black;float: center;}table tr{border: 1px solid black;}table tr td{border: 1px solid black;}table tr th{border: 1px solid black;}</style></head><body>";
        div += document.getElementById('getp').innerHTML;
        div += "</body></html>";
        var win = window.open("", "", "width=960,height=500");
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
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];

    $sql = "UPDATE `applyform` SET `selected`='1' WHERE ID = '$id'";
    $qry = mysqli_query($connection, $sql);
    if ($qry) {
        echo "<script>alert('Selected')</script>";
    } else {

    }

}

?>
