<?php include('header/admin-header.php'); ?>

<?php
//connection code
include('dbcon.php');

//view code

$sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Cultural'";
$qry = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div align="center" class="container" id='getp'>

    <h3 align="center"><a href="cultural-wing.php"> cultural wing</a></h3>


    <?php

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


<div align="center">

    <h3 align="center"><a href="sports.php"> Sports wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='sports' AND position LIKE '%Manager%'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


<div align="center">

    <h3 align="center"><a href="programming-wing.php">Programming wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='programming'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


</div>


<div align="center">

    <h3 align="center"><a href="Academic-wing.php">Academic wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Academic'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


</div>


<div align="center">

    <h3 align="center"><a href="Finance-wing.php">Finance wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Finance'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


</div>


<div align="center">

    <h3 align="center"><a href="Relational-wing.php">Relational wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Relational'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


</div>


<div align="center">

    <h3 align="center"><a href="publication-wing.php">Publication wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Publication'";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


</body>
</html>