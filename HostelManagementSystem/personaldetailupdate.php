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
   

   if (isset($_POST['email'])) {
         $email1=$_POST['email'];
          

     } 
    if (isset($_POST['Course'])) {
         $course1=$_POST['Course'];
          
     
     }
      if (isset($_POST['year'])) {
         $year1=$_POST['year'];
          
     
     }
      if (isset($_POST['department'])) {
         $department1=$_POST['department'];
          
     
     }

      if (isset($_POST['date'])) {
         $date1=$_POST['date'];
          

     } 
     if (isset($_POST['scontact'])) {
         $scontact1=$_POST['scontact'];
          
     
     }
     if (isset($_POST['pcontact'])) {
         $pcontact1=$_POST['pcontact'];
          
     
     }
     if (isset($_POST['gcontact'])) {
         $gcontact1=$_POST['gcontact'];
          
     
     }
     if (isset($_POST['paddress'])) {
         $paddress1=$_POST['paddress'];
          
     
     }
     
    session_start();
         $id1 = $_SESSION['id2'];
         $Name1 = $_SESSION['fname2'];
         $Name2 = $_SESSION['lname2'];
     if($query=mysqli_query($conn,"UPDATE `sdnew` SET `email`='$email1',`year`='$year1',`department`= '$department1',`contact`='$scontact1',`parent_contact`='$pcontact1',`Guardian_contact`='$gcontact1',`permenant_address`='$paddress1' where `id` = '$id1' and `fName` = '$Name1' and `lName` = '$Name2'"))
      {
          echo"<script>
          alert('data updated successfully');
          Window.location.href='personaldetailupdate.php'
        </script>";
      }
      else
      {
           echo"<script>
          alert('data Not Recorded Please Try Again');
          Window.location.href='personaldetailupdate.php'
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
  <link href="./maincss2.css" rel="stylesheet">
</head>
<body>
    <h1>Personal Details</h1>
   <div class="info"><p> <i class="fa fa-heart"></i> For GPA Girls Hostel </p></div>
  
  <form action="personaldetailupdate.php" method="POST">
      <h1>Upadate your details.</h1>
  

      <div class="leftcontact">
        
            
     
  
      <div class="form-group">
      <p>E-mail <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Course <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
       <input type="Course" name="Course" id="Course" data-rule="Course" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Course' est obligatoire."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Academic Year <span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="year" id="year" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'year' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Department <span>*</span></p>
      <span class="icon-case"><i class="fa fa-map-marker"></i></span>
        <input type="text" name="department" id="department" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'department' doit être renseigné."/>
                <div class="validation"></div>
      </div>  
      <div class="form-group">
      <p>Date of Addmission <span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="Date" name="date" id="date" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'date' doit être renseigné."/>
                <div class="validation"></div>
      </div>


  </div>

  <div class="rightcontact">  
     
      <div class="form-group">
      <p>Student contact Number <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text" name="scontact" id="scontact" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'scontact' doit être renseigné."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>parent contact Number <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="pcontact" id="pcontact" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'pcontact' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>guardian contact Number<span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="gcontact" id="gcontact" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'gcontact' doit être renseigné."/>
                <div class="validation"></div>
      </div>

     
    
      <div class="form-group">
      <p>Permanent Address<span>*</span></p>
      <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="paddress" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'padddress' doit être renseigné."></textarea>
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