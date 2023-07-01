<?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="shakthischool";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql="SELECT * FROM shakthimarks";

        
    $result=mysqli_query($conn,$sql);
    //var_dump($result);
    $count=mysqli_num_rows($result);;
    
   
        ?>



<html>
    <head>
        <title>

        </title>
        <style>
            table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>
    </head>
    <body>
        <a href="index.html">entervalue</a><br>
        <a href="addmarks.html">addmarks</a>
        <center>


        <table>
            <tr>
                <th>Rollnumber
                </th>
                <th>
                    Studentname
                </th>
                <th>
                    English
                </th>
                <th>
                    Tamil
                </th>
                <th>
                Social
                </th>
                <th>
                    Science
                </th>
                <th>
                    Maths
                </th>
                <th>
</th>
                
            </tr>

            <?php   
            if($count > 0) {
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
                <td><a href="delete.php?rollnumber=<?php echo $row['rollnumber']?>">delete</a></td>
            </tr>0
            <?php } // closing while ?>
                        </table>
                        <?php 
                        
                    } // Closing if
                        
                        ?>
                        </center>
    </body>
<?php 
    
    

     
         mysqli_close($conn);
         ?>
</html>