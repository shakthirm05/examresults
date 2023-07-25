<?php include 'header.php'?>
<?php include 'footer.php'?>


<html>
    
<body>
   
    <div class="container  text-black d-flex text-center p-3 col-md-4 justify-content-center" >
        <form class="align-items-center border p-5 mt-5" action="addstudent.php" method="post">
            <label for="rollnumber"></label>
            <input type="rollnumber"  name="rollnumber" class="form-control" id="rollnumber" placeholder="rollnumber">
            <label for="studentname"></label>
            <input type="student name" class="form-control" name="studentname" id="student name" placeholder="student name">
            <label for="english"></label>
            <input type="english" class="form-control" id="english"  name="english"placeholder="english">
            <label for="tamil"></label>
            <input type="tamil" class="form-control" id="tamil" name="tamil" placeholder="tamil">
            <label for="social"></label>
            <input type="social" class="form-control" id="social" name="social" placeholder="social">
            <label for="science"></label>
            <input type="science" class="form-control" id="science"  name="science"placeholder="science">
            <label for="maths"></label>
            <input type="maths" class="form-control" id="maths" name="maths" placeholder="maths">

            <button class="btn btn-primary w-20 py-2 my-2" type="submit" >Submit</button>
          </form></div>
            
       
          


</body>

</html>