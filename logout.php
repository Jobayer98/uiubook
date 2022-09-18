<?php 

session_start();
session_destroy();

//header("Location: index.php");
echo "<script>alert('Successfully Logout.'); window.location='index.php'; </script>";

?>