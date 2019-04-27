<?php 
session_start();
include('header/stu-header.php'); ?>

<h1 align="center">Notice</h1>
<?php
include('dbcon.php');
//view code
$sql = "SELECT * FROM notice where public=0 order by notice_date desc";
$qry = mysqli_query($connection, $sql);

if (mysqli_num_rows($qry) > 0) {
    while ($row = mysqli_fetch_assoc($qry)) {
        ?>
        <div style="width: 900px; margin: 0 auto">
            <h4>Date: <?php echo $row['notice_date'] ?></h4>
            <h4>Title: <?php echo $row['title'] ?></h4>
            <h4>Notice:</h4>
            <textarea class="form-control" style="border: none;" readonly="true" rows="4"
                      cols="100"><?php echo $row['notice'] ?></textarea>
        </div>


        <?php
    }
} else {

    echo "not viewed";
}


?>


