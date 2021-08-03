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
    session_start();
         $id1 = $_SESSION['id2'];
         $Name1 = $_SESSION['fname2'];
         $Name2 = $_SESSION['lname2'];
          if (isset($_POST['date'])) {
         $date1=$_POST['date'];
          

     } 
   if (isset($_POST['type'])) {
         $type1=$_POST['type'];
          

     } 
    if (isset($_POST['complaint'])) {
         $complaint1=$_POST['complaint'];
          
     
     }
     $cid=0;
      if($query=mysqli_query($conn,"insert into com_reg values('".$cid."','".$id1."','".$Name1."','".$Name2."','".$date1."','".$type1."','".$complaint1."')"))
      {
          echo"<script>
          alert('Complaint Recorded Successfuly');
          Window.location.href='complaintformnew2.php'
        </script>";
      }
      else
      {
           echo"<script>
          alert('Complaint Not Recorded Please Try Again');
          Window.location.href='complaintform.php'
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
height:610px;
box-shadow:0 0 15px rgba(14,41,57,0.12),0 2px 5px rgba(14,41,57,0.44),inset 0 -1px 2px rgba(14,41,57,0.15);
float:left;
padding:10px 70px 0;
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

<div id="first">
<form action="complaintformnew2.php" method="post">
<h1>Complaint Form</h1>
<h4>Please fill all entries.</h4>
<span>Date :</span>&nbsp;

<input class="Date" name="date" type="date" required>

   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
<span>Type :</span>&nbsp;

  <select id="complaint_type" name="type" required>
<option value="Mess">MESS</option>
<option value="Other">OTHER</option>
<option value="Infrastructure">IFRASTRUCTURE</option>
</select>
   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>



<span>Complaint :</span>
<div class="row">&nbsp</div>
   <div class="row">&nbsp</div>
  <textarea  type="text" id="complaint" name="complaint" placeholder="Write detail Complaint.." style="height:100px " required></textarea>
</textarea>


   <div class="row">&nbsp</div>
   <div class="row">&nbsp</div>


<center>
<button class="button button2 " name="add">Submit</button></center>
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