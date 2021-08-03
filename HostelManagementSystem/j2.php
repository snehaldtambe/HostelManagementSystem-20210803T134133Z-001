<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="./maincss.css" rel="stylesheet">
</head>
<body>
<font color="Red">
  <h1><center><b>STUDENT ACCESS</b></center></h1>
  <marquee>
  <font color="blue" size="5px"><b><I>
<?php
session_start();
  //echo "Welcome" . $_SESSION['id2'];
    echo "Welcome   " . $_SESSION['fname2'];
     echo"   to GPA  College  Hostel !!!";
        //echo "Welcome" . $_SESSION['lname2'];
        //session_destroy();
?>  </I></b>  </marquee>
<div class="main">
  <div style="padding:1px 16px;height:1000px;">
<center><img src="hostel_building.jpg" class="img-rounded" alt="HOSTEL BUILDING" width="1500" height="550"></center>
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