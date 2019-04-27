<?php include('header/admin-header.php'); ?>

<h1 align="center" style="color: red;">Publication Members</h1>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">

        tr td {
            border: 1px solid black;
        }

        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<div class="container" id='getp'>
<table class="table" align="center" width="60%">

        <thead>
        <tr>
            <td><b>SL</b></td>
            <td><b>Department-ID</b></td>
            <td><b>Selected Student</b></td>
            <td><b>Postion</b></td>
            <td><b>Contact No.</b></td>
            <td><b>Email</b></td>
            <td><b>Assign</b></td>
            <td><b>Status</b></td>
            <td><b>Feedback</b></td>

        </tr>
        </thead>


    <?php
    include('dbcon.php');

    $sql = "SELECT * FROM applyform WHERE selected=1 AND wing='publication' AND position LIKE '%Manager%' ";
    $qry = mysqli_query($connection, $sql);
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
                     <td><?php echo $row["Contact"]; ?></td>
                     <td><?php echo $row["E-mail"]; ?></td>


                     <td><a href="asign.php?id=<?php echo $row['ID'] ?>">assign</a></td>

                    <td>
                       <?php 
                        $id = $row['dept-id'];
                        $sql = "SELECT * FROM work where stuid='$id'";
                        $qry2 = mysqli_query($connection, $sql);
                        if($qry2){
                            if (mysqli_num_rows($qry2) > 0){
                                echo "Assigned";
                            }else{
                                echo "Not Assigned";
                            }
                        }
                        ?>
                    </td>
                   <td><a href="getfeed.php?id=<?php echo $row['dept-id'] ?>">Get Feedback</a></td>

                </tr>


            <?php
        }

    } else {
        echo "not viewed";
    }

    ?>
</table>

</div>


<h2 align="center">Assistant list</h2>


<div class="container" id='getp'>
    <table class="table" align="center" width="60%">

        <thead>
        <tr>
            <td><b>SL</b></td>
            <td><b>Department-ID</b></td>
            <td><b>Selected Student</b></td>
            <td><b>Postion</b></td>
            <td><b>Contact No.</b></td>
            <td><b>Email</b></td>
            <td><b>Assign</b></td>
            <td><b>Status</b></td>
            <td><b>Feedback</b></td>

        </tr>
        </thead>
        <tbody>
        <?php
        //connection code
        include('dbcon.php');

        //view code

        $sql = "SELECT * FROM applyform WHERE selected=1 AND position='Assistant' AND wing='publication'";
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
                     <td><?php echo $row["Contact"]; ?></td>
                     <td><?php echo $row["E-mail"]; ?></td>


                     <td><a href="asign.php?id=<?php echo $row['ID'] ?>">assign</a></td>

                    <td>
                       <?php 
                        $id = $row['dept-id'];
                        $sql = "SELECT * FROM work where stuid='$id'";
                        $qry2 = mysqli_query($connection, $sql);
                        if($qry2){
                            if (mysqli_num_rows($qry2) > 0){
                                echo "Assigned";
                            }else{
                                echo "Not Assigned";
                            }
                        }
                        ?>
                    </td>
                   <td><a href="getfeed.php?id=<?php echo $row['dept-id'] ?>">Get Feedback</a></td>

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