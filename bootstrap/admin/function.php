<?php
function login($loginname,$login_pass){
    global$servername,$username,$password,$databasename;
    
    
    
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $databasename);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
     
      $sql = "SELECT * FROM user WHERE username='$loginname'";
      $result = mysqli_query($conn, $sql);
      var_dump($sql);
      $count = mysqli_num_rows($result);
      if($count>0){
        $row=mysqli_fetch_assoc($result);
        if($login_pass==$row["passwords"]){
return true;
           // header("Location:showtables.php");
        }
      }    
      mysqli_close($conn);
    return false;
    }
    function addstudent($array){
 global$servername,$username,$password,$databasename;
   
 $conn=mysqli_connect($servername,$username,$password,$databasename);
 $sql= "INSERT INTO shakthimarks (rollnumber, studentname,english,tamil,social,science,maths)
 VALUES ('$array[0]', '$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]')";
 $query=mysqli_query($conn,$sql);
 
 if($query){
 return true;
 }
 mysqli_close($conn);
 
 
  return false;
 
 
    //  header("Location:showtables.php");

    }

    function edit($array){
      global$servername,$username,$password,$databasename;
      $conn=mysqli_connect($servername,$username,$password,$databasename);
      $sql="UPDATE shakthimarks SET rollnumber='$array[0]',studentname='$array[1]',english='$array[2]',tamil='$array[3]',social='$array[4]',science='$array[5]',maths='$array[6]' WHERE rollnumber='$array[0]'";
    $query=mysqli_query($conn,$sql);
      if($query){
      return true;

    }
    // mysqli_close($conn);
    
      return false;
    
    }
    function getStudentmark(){
      global$servername,$username,$password,$databasename;
      $conn=mysqli_connect($servername,$username,$password,$databasename);
      $sql="SELECT * FROM shakthimarks";
      $result=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      
      
    
    }
    ?>
