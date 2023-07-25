<?php
include("header.php");

$rollnumber=$_POST["rollnumber"];
$studentname=$_POST["studentname"];
$english=$_POST["english"];
$tamil=$_POST["tamil"];
$social=$_POST["social"];
$science=$_POST["science"];
$maths=$_POST["maths"];
$array=array($rollnumber,$studentname,$english,$tamil,$social,$science,$maths);
 
if(addstudent($array)){
    header("Location:showtables.php");
}
else{
 echo   "error in updating value";
}
// var_dump($_POST);
/*
$servername="localhost";
$username="root";
$password="";
$databasename="shakthischool";
$conn=mysqli_connect($servername,$username,$password,$databasename);
$sql= "INSERT INTO shakthimarks (rollnumber, studentname,english,tamil,social,science,maths)
VALUES ($rollnumber, '$studentname', $english,$tamil,$social,$science,$maths)";
if(mysqli_query($conn,$sql)){
    header("Location:showtables.php");
}
else{
   echo "error in creating new record ";
}
mysqli_close($conn);*/
?>