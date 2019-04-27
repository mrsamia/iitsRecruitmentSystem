<?php include('header/admin-header.php'); ?>


<div class="container">
    <h1 align="center">Notice</h1>

    <form style="width: 500px; margin: 0 auto; padding: 30px;" align="center" action="" method="post">

        <div style="width: 300px; margin: 0 auto;" class="form-group">
            <label for="usr">Date:</label>
            <input class="form-control" type="date" name="notice_date" required>
        </div>
        <div style="width: 300px; margin: 0 auto;" class="form-group">
            <label for="usr">Notice Title:</label>
            <textarea class="form-control" type="text" rows="3" cols="60" name="title" required></textarea>
        </div>
        <div style="width: 500px; margin: 0 auto;" class="form-group">
            <label for="usr">Notice Box:</label>
            <textarea class="form-control" rows="5" cols="60" type="text" name="notice" required></textarea>
        </div>
        <div style="width: 300px; margin: 0 auto; padding: 20px" class="form-group">
            <input class="btn btn-primary" type="submit" class="btn btn-primary" name="submit">
        </div>
    </form>

</div>


<?php
include('dbcon.php');
//insert code
if (isset($_POST['submit'])) {
    $date = $_POST['notice_date'];
    $title = $_POST['title'];
    $notice = $_POST['notice'];
    $sql = "INSERT INTO notice(`notice_date`,`title`,`notice`, `public`) VALUES('$date','$title','$notice', '1')";
    $qry = mysqli_query($connection, $sql);
    echo $qry;
    if ($qry) {
        echo " notice submitted successfully";
    } else {
        echo "not inserted";
    }
}


?>
