<?php 

$id = $_GET['id'];

include('config.php');

$query = "DELETE FROM buybooks WHERE $id=BookID";

mysqli_query($conn, $query);

header("Location: user.php");
exit();
?>