<?php 

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];

	$sql = "SELECT * FROM subcriber WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
		$sql = "INSERT INTO subcriber (email)
				VALUES ('$email')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$email = "";
			echo "<script>alert('Thanks for subcribing');</script>";
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
			echo "<script>alert('You Already Subcribed. Try another one')</script>";
	}
		
}

?>