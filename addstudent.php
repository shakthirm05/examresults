<?php
$rollnumber=$_POST["rollnumber"];
$studentname=$_POST["studentname"];
$english=$_POST["english"];
$tamil=$_POST["tamil"];
$social=$_POST["social"];
$science=$_POST["science"];
$maths=$_POST["maths"];
var_dump($_POST);
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

$sql = "INSERT INTO shakthimarks (rollnumber, studentname,english,tamil,social,science,maths)
VALUES ($rollnumber, '$studentname', $english,$tamil,$social,$science,$maths)";

//var_dump($sql);

if(mysqli_query($conn, $sql)){
  echo "the data stored succeesfully";
}
else{
  echo"error in creating new record";
}
echo "<a href='addmarks.html'>back to login</a>";

mysqli_close($conn);
?>