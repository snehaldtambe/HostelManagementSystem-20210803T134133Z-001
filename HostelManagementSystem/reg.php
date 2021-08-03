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
    if (isset($_POST['mName'])) {
         $Name3=$_POST['mName'];
    }
    if (isset($_POST['fName'])) {
         $Name1=$_POST['fName'];
          
     
     } 
       if (isset($_POST['lName'])) {
         $Name2=$_POST['lName'];
          
     
     } 
     if (isset($_POST['dateofbirth'])) {
         $dateofbirth1=$_POST['dateofbirth'];
          

     } 
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
     if (isset($_POST['username'])) {
         $username1=$_POST['username'];
          
     
     }
     if (isset($_POST['passward'])) {
         $passward1=$_POST['passward'];
            $count1=strlen($passward1);
      echo $count1;
      if($count1 > 10 and $count1 <4)
      {
         echo"<script>
          alert('passward should range between 4 to 10');
          //Window.location.href='personaldetail4.php'
        </script>";
		header('location:./index1.php');
      }
     
     }
     
      $roomno=0;
      $id=0;

      if($query=mysqli_query($conn,"insert into sdnew values('".$id."','".$Name1."','".$Name3."','".$Name2."','".$dateofbirth1."','".$email1."','".$course1."','".$year1."','".$department1."','".$date1."','".$scontact1."','".$pcontact1."','".$gcontact1."','".$paddress1."','".$username1."','".$passward1."','".$roomno."')"))
      {
          echo"<script>
          alert(' personal details Recorded Successfuly');
          //Window.location.href='index1.php'
        </script>";
		header('location:./index1.php');
      }
      else
      {
           echo"<script>
          alert('not Recorded Please Try Again');
          //Window.location.href='personaldetail4.php'
          </script>";
		  header('location:./index1.php');
      }
  }
  ?>