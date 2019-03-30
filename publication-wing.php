<?php include('header/admin-header.php'); ?>
<?php
//connection code
include('dbcon.php');

//view code

$sql = "SELECT * FROM applyform WHERE selected=1 AND wing='Publication'";
$qry = mysqli_query($connection, $sql);
?>
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

            <td><b>Assign</b></td>

        </tr>
        </thead>
        <tbody>
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


                    <td><a href="<?php echo $row['ID'] ?>">assign</a></td>


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