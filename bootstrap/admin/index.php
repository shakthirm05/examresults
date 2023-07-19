<?php
$error="";
if(isset($_POST["username"])){
    $loginname = $_POST["username"];
  $passwords = $_POST["passwords"];
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
 
  $sql = "SELECT * FROM user WHERE username='$loginname'";
  $result = mysqli_query($conn, $sql);
  var_dump($sql);
  $count = mysqli_num_rows($result);
  if($count>0){
    $row=mysqli_fetch_assoc($result);
    if($passwords==$row["passwords"]){
        header("Location:showtables.php");
    }
    else{
        $error="invalid username";

    }

  }
  else{
    $error="invalid password";
  }
  mysqli_close($conn);
}
?>

















<html>
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    </head>
    <div class="container-fluid p-5 bg-primary text-white text-center ">
        <div class="page-header ">
            ADMIN SECTION
        </div>
        </div>
        <?php if($error){?>
            <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>error!</strong><?php echo $error?>
  </div>
<?php } ?>
        <div class="container  text-black d-flex text-center p-5 col-md-4 justify-content-center" >
            <form class="align-items-center border p-5 mt-5" action="" method="post">
                <label for="username"></label>
                <input type="username" class="form-control" name="username" id="username" placeholder="username">
                <lable for="passwords"></lable>
                <input type="password" class="form-control" id="passwords" name="passwords"placeholder="password">
                
           <input type="submit" name="submit" >
              <!-- <button class="btn btn-primary w-20 py-2 my-2" type="button">Submit</button> -->
              </form></div>


        <footer class="footer mt-auto py-3 bg-primary fixed-bottom">
            <div class="container">
                <span class="text-body-secondary">Place sticky footer content here.</span>
            </div>
        </footer>
</html>