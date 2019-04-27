<?php include('header/admin-header.php'); ?>

<h1 align="center">Final List</h1>

<div style="width: 1060px; margin: 0 auto">

    <div class="search" style="width: 300px; margin: 0 auto">
        <form action="" method="post">
            <label>Select Wing To Search: </label>
            <select class="form-control" name="search_val" required>
               <option value="All">All</option>
                <option value="Sports">Sports</option>
                <option value="Cultural">Cultural</option>
                <option value="Academic">Academic</option>
                <option value="Programming">Programming</option>
                <option value="Mentoring">Mentoring</option>
                <option value="Finance">Finance</option>
                <option value="Relational">Relational</option>
                <option value="Publication">Publication</option>
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
        $sql = "SELECT * FROM applyform WHERE wing='$val' and selected=1";
    }
} else {
    $sql = "SELECT * FROM applyform  where selected=1";
}
$qry = mysqli_query($connection, $sql);
?>
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
            <td><b> Dept-ID</b></td>
            <td><b> Selected Student</b></td>
            <td><b> Postion</b></td>
            <td><b> wing</b></td>
        </tr>
        </thead>
        <tbody> <?php
        $SL = 0;

        if (mysqli_num_rows($qry) > 0) {
            while ($row = mysqli_fetch_assoc($qry)) {

                ?>
                <tr>
                    <td> <?php $SL = $SL + 1;
                        echo $SL; ?></td>
                    <td> <?php echo $row["dept-id"]; ?></td>
                    <td> <?php echo $row["name"]; ?></td>
                    <td> <?php echo $row["position"]; ?></td>
                    <td> <?php echo $row["wing"]; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "not viewed";
        }

        ?> </tbody>
    </table>
</div>
</body>
</html>