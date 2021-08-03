<?php
 // mysql_connect("localhost","root","")or die("could not connect to server");
 // mysql_select_db("student_database")or die("could not connect to database");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_database";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 } 

  if(isset($_POST['add']))
  {  
   // echo "heloo";
     session_start();
         $id11 = $_SESSION['id2'];
        // echo  $_SESSION['id2'];
         $Name11 = $_SESSION['fname2'];
         $Name21 = $_SESSION['lname2'];
    
     
   if (isset($_POST['FQ'])) {
         $FQ1=$_POST['FQ'];

         } 
    if (isset($_POST['FV'])) {
       $FV1=$_POST['FV'];

     } 
     if (isset($_POST['FT'])) {
               $FT1=$_POST['FT'];

     }
    if (isset($_POST['EC'])) {
         $EC1=$_POST['EC'];
     }
     if (isset($_POST['WS'])) {
         $WS1=$_POST['WS'];
     }
     if (isset($_POST['OI'])) {
         $OI1=$_POST['OI'];
     }
     if (isset($_POST['OV'])) {
         $OV1=$_POST['OV'];
     }
      if (isset($_POST['suggetions'])) {
         $suggetions1=$_POST['suggetions'];
     }
     /*SELECT AVG (OV) FROM `feed`*/
     
  
      if($query=mysqli_query($conn,"INSERT INTO `feedbacktable` VALUES 
        ('$id11','$Name11','$Name21','$FQ1','$FV1','$FT1','$EC1','$WS1','$OI1','$OV1
        ','$suggetions1')"))
      {
          echo"<script>
          alert(' Recorded Successfuly');
          Window.location.href='feedbacknew.php'
        </script>";
        
      }
      else
      {
           echo"<script>
          alert('Not Recorded Please Try Again');
          Window.location.href='feedbacknew.php'
          </script>";
      }
  }
?>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="./maincss.css" rel="stylesheet">
    <style>
body{
margin:0;
padding:0;
font-family:'Ubuntu',sans-serif
}
#first{
width:500px;
height:950px;
box-shadow:0 0 15px rgba(14,41,57,0.12),0 2px 5px rgba(14,41,57,0.44),inset 0 -1px 2px rgba(14,41,57,0.15);
float:left;
padding:10px 60px 0;
background:#D0D3D4  ;
margin:2% 30%;
border-radius:5px
}
hr{
border-top:px solid #ccc;
margin-bottom:30px
}
span{
float:left;
margin-top:8px;
font-size:17px
}
.one{
display:block;
margin-left:22px;
margin-top:10px
}
.two{
display:block;
margin-left:22px;
margin-top:10px
}
.three{
display:block;
margin-left:-3px;
margin-top:10px
}
textarea{
width:368px;
padding:10px;
border:3px solid #e1e1e1;
height:100px;
margin-bottom:25px
}
input,select{
width:300px;
padding:10px;
border-radius:5px;
border:1px solid #cbcbcb;
box-shadow:inset 0 1px 2px rgba(0,0,0,0.18);
font-family:Cursive
}
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {background-color: green;} /* Blue */


</style>
</head>
<body>

<form action="feedbacknew.php" method="POST">

<div class="container">
  <center>
  <font color="red">
  <h1>FEEDBACK REGISTER</h1>
      <font color="black">
    <div class="row">&nbsp</div>
        
           <center>
           
<img src="feed3.php.jpg"    height="150px" width="200px"></center>
      <div class="row">&nbsp</div>
      <div class="row">&nbsp</div>
  <h4>Rating should be in between 1-10</h4>
    <h5>1=LOW 10=HIGH</h5>
  </center>
      <font color="red">
          
   <CENTER> <h3> MESS FEEDBACK</h3></CENTER>
    
      <font color="black">


  
 <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
   <center><label for="FQ">Food Quality::</label>
    <input type="FQ" class="form-control" id="FQ" placeholder="Enter your FQ ratings" name="FQ"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>
  <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
    <center><label for="FV">Food  Variety:</label>
    <input type="FV" class="form-control" id="FV" placeholder="Enter your FV ratings" name="FV"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>
<div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
   <center> <label for="FT">Food Taste:</label>
    <input type="FT" class="form-control" id="FT" placeholder="Enter your FT ratings" name="FT"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>

 
          <font color="red">
            <center>
            <h3><center> FEEDBACK OF OTHER FACILITIES </center></h3></center>
      <font color="black">

  
    </div>
  </div>

  <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
   <center> <label for="ec">Electricity supply: </label>
    <input type="EC" class="form-control" id="EC" placeholder="Enter your EC ratings" name="EC"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>
   <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
    <center><label for="WS">Water Supply: </label>
    <input type="WS" class="form-control" id="WS" placeholder="Enter your WS ratings" name="WS"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>

  <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
    <center><label for="OI">Other infrastructural Facilities </label>
    <input type="OI" class="form-control" id="OI" placeholder="Enter your OI ratings" name="OI"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>

  <div class="form-group">
  <div class ="row">&nbsp</div>
  <div class ="row">
  <div class="col-lg-4"></div>
   <div class="col-lg-4">
   <center> <label for="OV">Overall  Rating </label>
    <input type="OV" class="form-control" id="OV" placeholder="Enter your OV ratings" name="OV"></center>
    </div>
     <div class="col-lg-4"></div>
  </div>
  </div>

    <div class="row"></div>
    <div class="row">&nbsp</div>
       <div class="row">&nbsp</div>
     

      <div class="row">
      
        
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <center> <label for="suggetions">suggetions:</label>
        </center><center>
        <textarea id="suggetions" name="suggetions" placeholder="Write something.." style="height:100px"></textarea>
        </center>
      </div>
            <div class="col-lg-4"></div>

    </div>
    <center>
 <div class ="row">&nbsp</div>
  <div class ="row">&nbsp</div>
    <center>  <button type="submit" name="add" class="btn btn-primary">Submit</button></center>
    <div class="row"></div></center></div>
        <div class="row"></div>

    <div class="row"></div>

  </form>
</div>
<?php include('./header.php');?> 
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html> 