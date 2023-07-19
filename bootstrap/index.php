<?php 
$cookie_name = "rollnumber";

setcookie($cookie_name, $_GET["rollnumber"], time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(isset($_GET["option1"])) {
  
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  
}


?>

</body>
</html>
<html>

<head>
    <title>

    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
     <div class="container-fluid p-5 bg-primary text-white text-center ">
        <div class="page-header ">
            EXAM RESULTS
        </div>
    </div>
    <div class="container  text-black d-flex text-center p-5 col-md-4 justify-content-center" >
        <form class="align-items-center border p-5 mt-5" action="checkresult.php" method="get">
            <label for="rollnumber">rollnumber</label>
            <input type="rollnumber" name="rollnumber" class="form-control" id="rollnumber" placeholder="rollnumber">
            
       <input type="submit" name="submit">
         <!-- <button class="btn btn-primary w-20 py-2 my-2" type="submit">Submit</button>-->
          <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >
      <label class="form-check-label" for="check1" >Remember Me</label>
    </div>
          </form></div>
    <footer class="footer mt-auto py-3 bg-primary fixed-bottom">
        <div class="container">
            <span class="text-body-secondary">Place sticky footer content here.</span>
        </div>
    </footer>
    

</body>

</html>