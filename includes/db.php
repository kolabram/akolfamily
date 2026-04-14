<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "akols_family";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    // Don't die on error - just show warning for now
    // die("Connection failed: " . mysqli_connect_error());
    // For now, just create a connection variable
    $conn = null;
}
?>