<?php
$rollnumber=$_POST["rollnumber"];
$studentname=$_POST["studentname"];
$english=$_POST["english"];
$tamil=$_POST["tamil"];
$social=$_POST["social"];
$science=$_POST["science"];
$maths=$_POST["maths"];

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shakthischool";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE shakthimarks SET rollnumber='$rollnumber',studentname='$studentname',english='$english',tamil='$tamil',social='$social',science='$science',maths='$maths'WHERE rollnumber='$rollnumber' ";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    
    header("Location:showtables.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
mysqli_close($conn);
?>