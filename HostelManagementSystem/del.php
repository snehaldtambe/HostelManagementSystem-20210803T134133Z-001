<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 } 
  if(isset($_POST['add']))
  {  
        if (isset($_POST['id'])) {
             $id1=$_POST['id'];
        }
        if (isset($_POST['fName'])) {
             $Name1=$_POST['fName'];
         } 
           if (isset($_POST['lName'])) {
             $Name2=$_POST['lName'];
         } 
     if($query=mysqli_query($conn,"DELETE FROM `sdnew` WHERE `id` = '$id1' and `fName` = '$Name1' and `lName` = '$Name2'"))
     {
          echo"<script>
          alert('data deleted successfully');
          Window.location.href='del.php'
        </script>";
      }
      else
      {
           echo"<script>
          alert('data Not deleted Please Try Again');
          Window.location.href='del.php'
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
<link href="./adminnav.css" rel="stylesheet">
<style>
body{
margin:0;
padding:0;
font-family:'Ubuntu',sans-serif
}
#first{
width:720px;
height:610px;
box-shadow:0 0 15px rgba(14,41,57,0.12),0 2px 5px rgba(14,41,57,0.44),inset 0 -1px 2px rgba(14,41,57,0.15);
float:left;
padding:10px 50px 0;
background:#D0D3D4  ;
margin:2% 30%;
border-radius:5px
}
hr{
border-top:1px solid #ccc;
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
width:350px;
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
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>
<?php include('adminheader.php');?>
<div id="first">
<form action="del.php" method="post">
<h1>RECORD DELETE FORM</h1>
<h4>Please fill all entries.</h4>
<span>student id :</span>&nbsp;
<input class="id" name="id" type="integer" required>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
<span>student firstname :</span>&nbsp;
<input class="fName" name="fName" type="text" required>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
<span>student lastname :</span>&nbsp;
<input class="lName" name="lName" type="text" required>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
<center>
<button class="button button2 " name="add">Submit</button></center>
</form>
</div>
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