<?php
$servername="localhost";
$username="root";
$password="";
$databasename="shakthischool";

$conn=mysqli_connect($servername,$username,$password,$databasename);
$sql="SELECT * FROM shakthimarks";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
?>
<html>
    <head>
        <title>
</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<head>
    <body>
    <div class="container-fluid p-5 bg-primary text-white text-center ">
        <div class="page-header ">
            EXAM RESULTS
        </div>
    </div>
    <div class="container mt-3  ">
        <div class=" container col-4 " >
    <table class="table table-light table-hover ">
    <thead >

    <tr>
                <th class="text-center bg-primary text-white">Rollnumber
                </th>
                <th class="text-center bg-primary text-white">
                    Studentname
                </th>
                <th class="text-center bg-primary text-white">
                    English
                </th>
                <th class="text-center bg-primary text-white">
                    Tamil
                </th>
                <th class="text-center bg-primary text-white">
                Social
                </th>
                <th class="text-center bg-primary text-white">
                    Science
                </th>
                <th class="text-center bg-primary text-white">
                    Maths
                </th>
                <th class="text-center bg-primary text-white"> </th>
            

                
            </tr>
</thead>
<?php if($count>0){
    while($row=mysqli_fetch_assoc($result)){

    
?>
 <tr>
                <td><?php echo $row['rollnumber'] ?></td>
                <td><?php echo $row['studentname'] ?></td>
                <td><?php echo $row['english'] ?></td>
                <td><?php echo $row['tamil'] ?></td>
                <td><?php echo $row['social'] ?></td>
                <td><?php echo $row['science'] ?></td>
                <td><?php echo $row['maths'] ?></td>
                <td><a href="delete.php?rollnumber=<?php echo $row['rollnumber']?>">DELETE</a></td>
                <td><a href="edit.php?rollnumber=<?php echo $row['rollnumber']?>">EDIT </a></td>
               </tr>
           <?php }?>
    </table>
</div>
</div>
    <?php }?>
    <footer class="footer mt-auto py-3 bg-primary fixed-bottom">
            <div class="container">
                <span class="text-body-secondary">Place sticky footer content here.</span>
            </div>
        </footer>
    </body>
    <?php mysqli_close($conn);
    ?>
    