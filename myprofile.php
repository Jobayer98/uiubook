
<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>