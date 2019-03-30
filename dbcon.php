<?php
//connection code
$servername = "localhost";
$username = "root";
$password = "";
$db = "internproject";
$connection = mysqli_connect($servername, $username, $password, $db);
if ($connection) {
    echo " ";
} else {
    echo "not connected";
}

?>