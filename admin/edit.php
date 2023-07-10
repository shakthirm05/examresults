<?php
$rollnumber=$_GET["rollnumber"];
var_dump($_POST);






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
if(isset($_POST["submit"]) ){
    $rollnumber=$_POST["rollnumber"];
    $studentname=$_POST["studentname"];
    $english=$_POST["english"];
    $tamil=$_POST["tamil"];
    $social=$_POST["social"];
    $science=$_POST["science"];
    $maths=$_POST["maths"];
    $sql="UPDATE shakthimarks SET rollnumber='$rollnumber',studentname='$studentname',english='$english',tamil='$tamil',social='$social',science='$science',maths='$maths' WHERE rollnumber='$rollnumber'";
    
 //$sql = "UPDATE shakthimarks SET rollnumber='$rollnumber',studentname='$studentname',english='$english',tamil='$tamil',social='$social',science='$science',maths='$maths'WHERE rollnumber='$rollnumber' ";

echo $sql;


  mysqli_query($conn,$sql);
  //  $row=mysqli_fetch_assoc($result);
header("Location:showtables.php");

}
else{
    echo "error in updating";
}
$sql="SELECT * FROM shakthimarks WHERE rollnumber=$rollnumber";
//var_dump($sql);

$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<html>
    <head>
        <title>

        </title>
        <style>
        
        body {
            background-image:url("login1.avif");
            margin: 0;
        }

        div.header {
            border: 1px solid rgb(204, 196, 196);
            border-collapse: collapse;
            height: 50px;
            text-align: center;
            text-transform: uppercase;
            color: black;
            padding: 3px;
        }

        div.menu {
            /*border: 1px solid rgb(204, 196, 196);*/
            border-collapse: collapse;
            background-color: rgb(171,190,181);
            height: 35px;
            text-align: center;
            text-transform: uppercase;
            color: white;
            width: 100%;
            padding:2px ;
            position: relative;

        }

        div.content1 {
            margin: auto;
            max-width: 40%;
            height: 50%;
            border: 3px solid black;

            padding: 10px;
            margin-top: 100px;
          position:relative;

            text-transform: uppercase;
        }

        div.content {
            
            
            height: 350px;
            padding: 10px;

        }
        div.shakthi{
            text-align:left ;
        }
        div.shakthi1{
            text-align:center;
            position:absolute;
            top:0px;
            right:200px;
        }
        div.shakthi2{
            position:absolute;
            right:250px;
            bottom:20px;

        }

        /*     a{
                display:block;
                text-decoration:none ;
                color:white;
                text-align: end;
       }*/
       div.absolute {
 position:absolute;
 top: 2px;
 right:8px;
 
 /*width: 200px;
 height: 100px;
 */
}

        div.content2 {

            text-align: center;
        }

        h {
            text-transform: capitalize;
            font-family: Arial, Helvetica, sans-serif;

        }
            
        </style>
    </head>
    <body>
       <div class="header">shakthi's school</div>
       <div class="menu">examination results </div>
       <div class="content">
<div class="content1">
               
        
       <form action="" method="post">
        <div class="shakthi">    
        <lable for="rollnumber" style="border-radius:5px ; background-color:white;text-shadow: 1px;">rollnumber</lable><br>
        <lable for="studentname" style="border-radius:5px ; background-color:white;text-shadow: 1px;">studentname</lable><br>
        <lable for="english" style="border-radius:5px ; background-color:white;text-shadow: 1px;">english</lable><br>
        <lable for="tamil" style="border-radius:5px ; background-color:white ;text-shadow:1px ;">tamil</lable><br>
        <lable for="social"  style="border-radius:5px ; background-color:white;text-shadow: 1px;">social</lable><br>
        <lable for="science" style="border-radius:5px ; background-color:white;text-shadow: 1px;">science</lable><br>
        <lable for="maths" style="border-radius:5px ; background-color:white;text-shadow: 1px;">maths</lable><br>
        
        </div>
      <div class="shakthi1">
        <input type="text" id="rollnumber" name="rollnumber" value= <?php echo $row['rollnumber']?> ><br>
        
        <input type="text" id="studentname" name="studentname" value=<?php echo $row['studentname']?>><br>
          
         <input type="text" id="english" name="english" value= <?php echo $row['english']?>><br>
         
        <input type="text" id="tamil" name="tamil" value= <?php echo $row['tamil']?>><br>
        
       <input type="text" id="social" name="social" value= <?php echo $row['social']?>><br>
     
    <input type="text " id="science"  name="science" value= <?php echo $row['science']?>><br>
   
    <input type="text" id="maths" name="maths"value= <?php echo $row['maths']?>><br>
    </div>  
    <div class="shakthi2">  
        
        
        <input type="submit" value="submit" name="submit" >
        
        

    </div>
       </form> 
       
    </div>
    </div>
       
       

    </body>
</html>