<?php
//$ref=array("english","social","physics","maths","tamil");

/*$marks1=array("rollnumber"=>'1001',"english"=>'100',"tamil"=>'100',"social"=>'100',"science"=>'99',"maths"=>'100');
$marks2=array("rollnumber"=>'1002',"english"=>'98',"tamil"=>'99',"social"=>'100',"science"=>'97',"maths"=>'100');
$marks3=array("rollnumber"=>'1003',"english"=>'92',"tamil"=>'93',"social"=>'100',"science"=>'96',"maths"=>'100');
$marks4=array("rollnumber"=>'1004',"english"=>'99',"tamil"=>'99',"social"=>'100',"science"=>'91',"maths"=>'100');
$marks5=array("rollnumber"=>'1005',"english"=>'95',"tamil"=>'97',"social"=>'100',"science"=>'98',"maths"=>'100');
$marks6=array("rollnumber"=>'1006',"english"=>'98',"tamil"=>'99',"social"=>'100',"science"=>'96',"maths"=>'100');
$marks7=array("rollnumber"=>'1007',"english"=>'98',"tamil"=>'78',"social"=>'100',"science"=>'97',"maths"=>'100');
$marks8=array("rollnumber"=>'1008',"english"=>'86',"tamil"=>'98',"social"=>'96',"science"=>'97',"maths"=>'100');
$marks9=array("rollnumber"=>'1009',"english"=>'96',"tamil"=>'97',"social"=>'99',"science"=>'94',"maths"=>'100');
$marks10=array("rollnumber"=>'1010',"english"=>'89',"tamil"=>'98',"social"=>'93',"science"=>'87',"maths"=>'100');
$mark=null;*/
//var_dump($_GET);
$rollnumber=$_GET["rollnumber"];

$servername="localhost";
$username="root";
$password="";
$database="shakthischool";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM shakthimarks WHERE rollnumber=$rollnumber";

//  var_dump($sql);
$result=mysqli_query($conn,$sql); 
$count=mysqli_num_rows($result);
//var_dump($count);
$row=mysqli_fetch_assoc($result);

/*switch($rollnumber){
    case"1001":
     $mark=$marks1;
     break;
     case"1002":
        $mark=$marks2;
        break;
        case"1003":
            $mark=$marks3;
break;
case"1004":
    $mark=$marks4;
    break;
    case"1005":
        $mark=$marks5;
        break;
        case"1006":
            $mark=$marks6;
            break;
            case"1007":
                $mark=$marks7;
                break;
                case"1008":
                $mark=$marks8;
                break;
                case"1009":
                    $mark=$marks9;

                break;
                case"1010":
                $mark=$marks10;
                break;
                default:
                $mark=[];
                //echo "the entered rollnumber is invalid";
}

*/
// $mark["rollnumber"]=$row["rollnumber"]
// $mark["english"]=$row["english"]
// $mark["tamil"]=$row["tamil"]
// $mark["social"]=$row["social"]
// $mark["science"]=$row["science"]
// $mark["maths"]=$row["marks"]

//var_dump ($GLOBALS);
/*var_dump($_GET);
var_dump($_POST);*/

?>
<html>

<head>
    <title>

    </title>
    <style>
        table {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-collapse: collapse;
            width: 30%;
            background-color:white;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        body{
                background-image:url("login1.avif");
                margin:0;
            }
            div.header{
                border:1px solid rgb(204,196,196);
                border-collapse: collapse;
                height:50px;
                text-align: center;
  text-transform: uppercase;
  color:black;
  padding:3px ;
            }
            div.menu{
                border:1px solid rgb(204, 196, 196);
                border-collapse: collapse;
                background-color:rgb(178,190,181) ;
                height:30px;
                text-align:center ;
                text-transform:uppercase ;
                color:white;
                width:100%;
                
            }
            div.content1{
                margin: auto;
  max-width: 40%;
  
  border: 3px solid black;
  
  padding: 10px;
  margin-top:100px ;
 
  
  text-transform: uppercase;
            }
            div.content{



padding:10px;

            }
            a{
                display:block;
                text-decoration:none ;
                color:black;
                text-align: end;
            }
            div.content2{
                
                text-align: center;
            }
            h{
                text-transform: capitalize;
                font-family: Arial, Helvetica, sans-serif;

            }
        
    </style>
</head>

<body>
<div class="header">
shakthi's school</div>
<div class="menu">examination results</div>

   

    <?php if($row != null) { ?>
        <center>
            <div class="content">
                <div class="content1">
        <table>
            <tr>
                <th>
                    rollnumber
                </th>
                <td>
<?php
echo $row["rollnumber"];
?>
                </td>
            </tr>


            <tr>
                <th>
                    english
                </th>
                <td>
                    <?php
 echo $row["english"];
?>
                </td>

            </tr>
            <tr>
                <th>
                    tamil
                </th>
                <td>
                    <?php
    echo $row["tamil"];
    ?>
                </td>


            </tr>
            <tr>
                <th>social</th>
                <td>
                    <?php
    echo $row["social"];
    ?>
                </td>

            </tr>
            <tr>
                <th>
                    science
                </th>
                <td>
                    <?php
    echo $row["science"];
    ?>
                </td>

            </tr>
            <tr>
                <th>
                    social
                </th>
                <td>
                    <?php
echo $row["maths"] ;
?>
                </td>
            </tr>

        </table>
    
<a href="index.html">back to login</a>
    </div>
    </div>
    </center>
            
<?php }
else{
   echo "<h1 >the rollnumber is invalid</h1>";
    }?>
    
   
    


</body>

</html>