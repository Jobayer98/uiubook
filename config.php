<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "uiubookstore";

$conn = mysqli_connect($server, $user, $pass, $database);
$dbconfig = mysqli_select_db($conn, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>