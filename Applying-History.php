<?php include('header/admin-header.php'); ?>

<div style="width: 1060px; margin: 0 auto">
    <h1 align="center">Applied Students</h1>

    <div class="search" style="width: 300px; margin: 0 auto">
        <form action="" method="post">
            <label>Select Wing To Search: </label>
            <select class="form-control" name="search_val" required>
                <option value="All">All</option>
                <option value="Sports">Sports</option>
                <option value="Cultural">Cultural</option>
                <option value="Academic">Academic</option>
            </select>

            <input style="width: 300px; margin: 0 auto; margin-top: 10px; margin-bottom: 10px;" class='btn btn-primary'
                   type="submit" name="search" value="search">
        </form>

    </div>

</div>


<?php
//connection code
include('dbcon.php');

//view code

if (isset($_POST['search'])) {
    $val = $_POST['search_val'];
    if ($val == 'All') {
        $sql = "SELECT * FROM applyform";
    } else {
        $sql = "SELECT * FROM applyform WHERE wing='$val'";
    }
} else {
    $sql = "SELECT * FROM applyform";
}
$qry = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>view data</title>
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

    <table class="table" align="center" width="50%">
        <thead>
        <tr>
            <td><b>SL</b></td>
            <td><b>Dept-ID</b></td>
            <td><b>Applicant's Name</b></td>
            <td><b>Position</b></td>
            <td><b>Wing</b></td>
            <td><b>Details</b></td>
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
                    <td><?php echo $row["wing"]; ?></td>

                    <td><a href="pdf.php?id=<?php echo $row['ID'] ?>">View Details</a></td>

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
<div style="width: 100px; margin: 0 auto; margin-top:10px; ">
    <button onclick="prnt()">print PDF</button>
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
        win.document.write("<br><br><center><p>&copy All Rights Reserved By Samia</p><p>Developed By Samia</p></center>");
        win.print();
    }
</script>
</html>



