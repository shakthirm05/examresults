<?php include 'header.php'?>
<?php

$rollnumber=$_GET["rollnumber"];

$servername="localhost";
 $username="root";
 $password="";
 $databasename="shakthischool";

$conn=mysqli_connect($servername,$username,$password,$databasename);
if(isset($_POST["submit"])){

//     else{
//      echo   "error in updating value";
$studentname=$_POST["studentname"];
$english=$_POST["english"];
$tamil=$_POST["tamil"];
$social=$_POST["social"];
$science=$_POST["science"];
$maths=$_POST["maths"];
//     }
   $array=array($rollnumber,$studentname,$english,$tamil,$social,$science,$maths);
   if (edit($array)){
    header("Location:showtables.php");
}   
   
 
//     $sql="UPDATE shakthimarks SET rollnumber='$rollnumber',studentname='$studentname',english='$english',tamil='$tamil',social='$social',science='$science',maths='$maths' WHERE rollnumber='$rollnumber'";
//   var_dump($sql);
//  $resul=mysqli_query($conn,$sql);
//  var_dump($resul);
// //   header("Location:showtables.php");

}

// else{
//     echo "error in updating";
// }

$sql="SELECT * FROM shakthimarks WHERE rollnumber=$rollnumber";

$result=mysqli_query($conn, $sql);
// var_dump($result);
$row=mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<?php include 'footer.php'?>

<html>
   
<body>
   
   
    <div class="container  text-black d-flex text-center p-3 col-md-4 justify-content-center" >
        <form class="align-items-center border p-5 mt-5" action="" method="post">
            <label for="rollnumber"></label>
            <input type="rollnumber" class="form-control" id="rollnumber"name="rollnumber" placeholder="rollnumber" value=<?php echo $row["rollnumber"]?>>
            <label for="studentname"></label>
            <input type="student name" class="form-control" id="student name" name="studentname" placeholder="student name" value=<?php echo $row["studentname"]?>>
            <label for="english"></label>
            <input type="english" class="form-control" id="english" name="english" placeholder="english" value=<?php echo $row["english"]?>>
            <label for="tamil"></label>
            <input type="tamil" class="form-control" id="tamil" name="tamil"placeholder="tamil" value=<?php echo $row["tamil"]?>>
            <label for="social"></label>
            <input type="social" class="form-control" name="social"id="social" placeholder="social" value=<?php echo $row["social"]?>>
            <label for="science"></label>
            <input type="science" class="form-control" name="science" id="science" placeholder="science" value=<?php echo $row["science"]?>>
            <label for="maths"></label>
            <input type="maths" class="form-control" id="maths"  name="maths" placeholder="maths" value=<?php echo $row["maths"]?>>
            <input type="submit" value="submit" name="submit" class="btn btn-primary w-20 py-20 my-2" >

         <!-- <button class="btn btn-primary w-20 py-2 my-2" type="submit">Submit</button> -->
          </form></div>
            
       
          

   

</body>

</html>