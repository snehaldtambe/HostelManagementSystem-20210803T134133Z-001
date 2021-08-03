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
$flag=0;
  if(isset($_POST['add']))
  {  
   if (isset($_POST['username1'])) {
         $username11=$_POST['username1'];
     } 
    if (isset($_POST['password1'])) {
         $password11=$_POST['password1'];
     }
      if (isset($_POST['username2'])) {
         $username22=$_POST['username2'];
     }
      if (isset($_POST['password2'])) {
         $password22=$_POST['password2'];
     }
      $sql="SELECT * from sdnew";
     $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($username11==$row["username"]  )
        {
          if($password11==$row["password"])
          {
            $username3 = $row["username"];
          $password3= $row["password"];
               $flag=1;
               if($query=mysqli_query($conn,"UPDATE `sdnew` SET `username`='$username22',`password`='$password22'  where `username` = '$username3' and `password` = '$password3' "))
                {
                    echo"<script>
                    alert('Username and Password change successfully !');
                    Window.location.href='changeusername.php'
                  </script>";
                }
                else
                {
                     echo"<script>
                    alert('username and passward not change. Please Try Again');
                    Window.location.href='changeusername.php'
                    </script>";
                } 
          }
          else
          {
           echo "<center>your old username is not match with password please try again.</center>";
          }
        }
      }
      }
      if($flag==0)
      {
        $link="changeusername.php";
            echo '<center><a href="'.$link.'"><font color="red" size="4px">  entered old data is wrong .click here for try again</center></a>';
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
  <link href="./maincss2.css" rel="stylesheet">
</head>
<body>
<h1>Personal Details</h1>
   <div class="info"><a href="#"><p> <i class="fa fa-heart"></i> For GPA Girls Hostel </p></a></div>
  <form action="changeusername.php" method="POST">
      <h1> change username and password.</h1>
      <div class="leftcontact">
      <div class="form-group">
      <p>Old username<span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="text" name="username1" id="username1" maxlength=10  minlength=4 required>
      <div class="validation"></div>
      </div>  
      <div class="form-group">
      <p>Old Password<span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
       <input type="password" name="password1" id="password1" maxlength=10  minlength=4 required>
      <div class="validation"></div>
      </div>
  </div>
  <div class="rightcontact">  
      <div class="form-group">
      <p>New username<span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="text" name="username2" id="username2"maxlength=10  minlength=4 required>
      <div class="validation"></div>
      </div>  
      <div class="form-group">
      <p>New Password<span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
       <input type="password" name="password2" id="password2" maxlength=10  minlength=4 required>
      <div class="validation"></div>
      </div>
  </div>
  </div>
<button type="submit" name="add"  class="bouton-contact">Submit</button>
</form> 
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