<?php
$rollnumber=$_GET["rollnumber"];
var_dump($rollnumber);

$servername="localhost";
$username="root";
$password="";
$databasename="shakthischool";

$conn=mysqli_connect($servername,$username,$password,$databasename);
$sql="SELECT * FROM shakthimarks WHERE rollnumber='$rollnumber'";

$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

mysqli_close($conn);
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
<body>
<div class="container-fluid p-5 bg-primary text-white text-center ">
        <div class="page-header ">
            EXAM RESULTS
        </div>
    </div>
    <?php if($row!=NULL){?>

        <div class="container mt-3  ">
        <div class=" container col-4 " >
        <h6 style="text-align: center;"><?php  echo $row["studentname"];?></h6>
        <table class="table table-light table-hover">
    <thead >
        <tr ><th class="bg-primary text-white text-center">subject</th> <th class="bg-primary text-white text-center ">marks</th></tr>
    </thead>
           
            
            
            <tr>
                <td>English</td>
                <td><?php echo $row["english"] ?></td>
            </tr>
            <tr>
                <td>Tamil</td>
                <td> <?php echo $row["tamil"] ?></td>
            </tr>
            <tr>
                <td>Social</td>
                <td><?php echo $row["social"] ?></td>
            </tr>
            <tr>
                <td>science</td>
                <td><?php echo $row["science"] ?></td>
            </tr>
            <tr>
                <td>Maths</td>
                <td><?php echo$row["maths"] ?></td>
            </tr>

        </table> <?php } else{?>
            <div class="alert alert-warning">
                <strong>warning</strong>Entered rollnumber doesnot exist!</div>
                <?php } ?>

    </div>
    </div>
    

    <footer class="footer mt-auto py-3 bg-primary fixed-bottom">
        <div class="container">
            <span class="text-body-secondary">Place sticky footer content here.</span>
        </div>
    </footer>



</body>

</html>


