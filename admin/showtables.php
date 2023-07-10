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
    $count=mysqli_num_rows($result);
    
   
        ?>



<html>
    <head>
        
        <style>
 body{
 background-image:url("login1.avif");
    margin:0;
 }
 
 
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
  background-color:white;   
}
div.header{
                /*border:1px solid rgb(204,196,196);*/
                border-collapse: collapse;
                height:70px;
                text-align: center;
  text-transform: uppercase;
  color:black;
            }
            div.menu{
                border:1px solid rgb(204, 196, 196);
                border-collapse: collapse;
                background-color:rgb(178,190,181);
                height:30px;
                text-align:center ;
                text-transform:uppercase ;
                color:white;
                width:100%;
                position:relative;
                
            }
            div.content1{
                margin:auto;
  width: 60%;
  height:40%;
  /*border: 3px solid green;*/
 
  padding: 10px;
  margin-top:100px ;
 
  
  text-transform: uppercase;
  
            }
            div.content{
border:1px solid rgb(148, 138, 138);
height:calc(110 - 120px);


            }

div.absolute{
    position:absolute;
    top:3px;
    right:10px;
}
a.shak{
    
    
  background-color:  #7c7878;
  color: white;
  padding: 4px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

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
       <!-- <a href="index.html">entervalue</a><br>
        <a href="addmarks.html">addmarks</a>-->
        <center>

<div class="header">
shakthi's school</div>
<div class="menu">examination results 
    <div class="absolute">

<a href="addmarks.html" class="shak">add marks</a>

</div>
</div>
<div class="content">
    <!--<div class="content1">-->
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
               <td><a href="edit.php?rollnumber=<?php echo $row['rollnumber']?>">edit</a></td>
            </tr>
            <?php } // closing while ?>
                        </table>
            <!--</div>-->
            </div>
                        <?php 
                        
                    } // Closing if
                        
                        ?>
                        </center>
       <!-- <a href="addmarks.html">addstudentsmarks</a>-->                
    </body>
<?php 
    
    

     
         mysqli_close($conn);
         ?>
        
</html>