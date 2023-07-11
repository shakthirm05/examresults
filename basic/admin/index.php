<?php
$error="";
if (isset($_POST['username'])) {

  $loginname = $_POST["username"];
  $passwords = $_POST["passwords"];
  //var_dump($_GET);

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
  $sql = "SELECT id,username,passwords FROM user WHERE username='$loginname'";
  $result = mysqli_query($conn, $sql);
  var_dump($sql);
  $count = mysqli_num_rows($result);
  
  if ($count > 0) {

    $row = mysqli_fetch_assoc($result);
 var_dump($row);
    if ($passwords == $row["passwords"]) {
      header("Location: showtables.php");
    } else {
       $error = "invalid username ";

    }
  } else {
     $error = "invalid password";
  }

  mysqli_close($conn);
}
?>
<html>

<head>
  <title>

  </title>
  <style>
    body {
      background-image: url("login1.avif");
    }

    div.header {
      height: 70px;
    }

    div.menu {
      background-color: white;
      height: 65%;
      width: 40%;
      margin: auto;
      position: relative;
    }

    div.style {
      width: 40%;
      height: 100%;
      background-image: url("Screenshot\ \(5\).png");
      background-repeat: none;
    }

    div.style1 {
      position: absolute;
      height: 100%;
      width: 45%;
      top: 70px;
      right: 0px;

    }

    .shak {
      border-radius: 20px;
      padding: 10px;
      margin: 6px;
      box-shadow: 0px 0px 15px 4px;
      font-family: monospace;


    }

    .shak1 {
      background-color: #7c7878;
      color: white;
      padding: 10px 50px 10px 50px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      border-radius: 4px;
      margin: 35px;
    }

    a {
      position: absolute;
      bottom: 75px;
      right: 5px;

    }

    div.error {
      text-align: center;
      margin: auto;
      margin-bottom: 10px;
      font-size: 18px;
      border: 1px solid gray;
    }
  </style>

</head>

<body>
  <div class="header"></div>
  <div class="menu">
    <?php if ($error) { ?>
      <div class="error">
        <?php echo $error ?>
      </div>
    <?php } ?>
    <div class="style"></div>
    <div class="style1">
      <form action="" method="POST">
        <label for="username"></label><br>
        <input type="text" id="username" name="username" placeholder="username" class="shak"><br>
        <label for="password"></label><br>
        <input type="text" id="passwords" name="passwords" placeholder="passwords" class="shak"><br>
        <button type="submit" class="shak1">login</button>
        <a href="index.html">back to login</a>


      </form>
</body>

</html>