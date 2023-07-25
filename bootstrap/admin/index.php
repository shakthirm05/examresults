<?php include 'header.php'?>
<?php include 'footer.php'?>

<?php
$error="";
if(isset($_POST["username"])){
    $l = $_POST["username"];
  $p = $_POST["passwords"];
  
if(login($l,$p)){
  header("Location:showtables.php");
}
else{
  echo"invalid username or password";
}


}  
  
?>
















<html>
    
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


       
</html>