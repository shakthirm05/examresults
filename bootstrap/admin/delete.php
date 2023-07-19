<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shakthischool";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$example=$_GET['rollnumber'];

$sql = "DELETE FROM shakthimarks WHERE rollnumber=$example ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
 header("Location:showtables.php");
 mysqli_close($conn);
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>