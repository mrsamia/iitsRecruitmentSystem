<?php include('../header/member-header.php'); ?>

<h1 align="center" style="color: red;">Sports Members</h1>

<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link rel="stylesheet" href='../css/bootstrap.css'>
    <style >

        tr td {
            border: 1px solid black;
        }

        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<div align="center">


    <?php
    include('../dbcon.php');

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='sports' AND position LIKE '%Manager%' ";
    $qry = mysqli_query($connection, $sql);

    if (mysqli_num_rows($qry) > 0) {
        while ($row = mysqli_fetch_assoc($qry)) {

            ?>


            <h4><?php echo $row["position"]; ?> : <?php echo $row["name"]; ?><br></h4>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>


</div>


<h2 align="center">Assistance list</h2>


<div class="container" id='getp'>
    <table class="table" align="center" width="60%">

        <thead>
        <tr>
            <td><b>SL</b></td>
            <td><b>Department-ID</b></td>
            <td><b>Selected Student</b></td>
            <td><b>Postion</b></td>

            <td><b>Feedback</b></td>

        </tr>
        </thead>
        <tbody>
        <?php
        //connection code
        include('../dbcon.php');

        //view code

        $sql = "SELECT * FROM applyform WHERE selected=1 AND position='Assistance' AND wing='sports'";
        $qry = mysqli_query($connection, $sql);
        ?>

        <?php
        $SL = 0;

        if (mysqli_num_rows($qry) > 0) {
            while ($row = mysqli_fetch_assoc($qry)) {

                ?>

                <tr>

                    <td><?php

                        $SL = $SL + 1;
                        echo $SL; ?></td>

                    <td><?php echo $row["dept-id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["position"]; ?></td>


                    <td><a href="<?php echo $row['ID'] ?>">Done</a></td>


                </tr>

                <?php
            }

        } else {
            echo "not viewed";
        }

        ?>

        </tbody>
    </table>
</div>
</body>
</html>