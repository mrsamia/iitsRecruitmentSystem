<?php include('header/admin-header.php'); ?>

<?php
//connection code
include('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div align="center">

    <h3 align="center">Board of Commitee</h3>


    <?php
//view code

    $sql = "SELECT * FROM applyform WHERE selected=1 AND position LIKE '%President%' OR position LIKE '%Secretary%'";
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

    <h3 align="center"><a href="sports.php"> Sports wing</a></h3>


    <?php
//view code

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



<div align="center" class="container" id='getp'>

    <h3 align="center"><a href="cultural-wing.php"> Cultural wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Cultural' AND position LIKE '%Manager%'";
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



<div align="center" class="container" id='getp'>

    <h3 align="center"><a href="Event-wing.php"> Event wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Event' AND position LIKE '%Manager%'";
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

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='programming' AND position LIKE '%Manager%'";
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

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Academic' AND position LIKE '%Manager%'";
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

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Finance' AND position LIKE '%Manager%'";
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

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Relational' AND position LIKE '%Manager%'";
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



</div>



<div align="center" class="container" id='getp'>

    <h3 align="center"><a href="Robotics-wing.php"> Robotics wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Robotics' AND position LIKE '%Manager%'";
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

    <h3 align="center"><a href="publication-wing.php">Publication wing</a></h3>


    <?php

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Publication' AND position LIKE '%Manager%'";
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