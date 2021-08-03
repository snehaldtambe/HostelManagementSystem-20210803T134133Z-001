<html>
<head>
	<title>
	</title>
	</head>
<body bgcolor=#D0D3D4  >
	
</body>
<html>
<?php
$conn = new mysqli("localhost", "root", "", "student_database");
 $usernameadmin="admin";
 $passwordadmin="admin";
  if(isset($_POST['add']))
  {  
  	$flag=0;
   
    if (isset($_POST['username11'])) {
         $username1=$_POST['username11'];
    }
    if (isset($_POST['pass'])) {
         $pass1=$_POST['pass'];
     }

     $sql="SELECT * from sdnew";
     $result = $conn->query($sql);
      if($username1==$usernameadmin && $pass1==$passwordadmin )
    {
      $flag=1;
          $link="j.php";
            echo '<center><font color ="red" size="4px"><a href="'.$link.'">click here for dashboard</a></center>';
    }

else if ($result->num_rows > 0) {
   
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($username1==$row["username"])
        {
        	if($pass1==$row["password"])
        	{
        		session_start();
			$_SESSION['id2'] = $row["id"];
			$_SESSION['fname2'] = $row["fName"];
			$_SESSION['lname2'] = $row["lName"];
        	echo "<center><font size='6px'>------------Already registred------------<center>";
        	$flag=1;
        	$link="j2.php";
            echo '<center><font color ="red" size="4px"><a href="'.$link.'">click here for dashboard</a></center>';
        	}
        	else
        	{
        		$link="index1.php";
            echo '<center><a href="'.$link.'"><font size="5px">username and password is not matching<br> <font color="red" size="4px">click here to try again <br> </font><center></a>';
            
             echo " <center><font size='5px'> if account is not created then <br></center>";
            //echo "\n";
        	}
        }
        
      }
      }
      if($flag==0)
      {
      	$link="index1.php";
            echo '<center><a href="'.$link.'"><font color="red" size="4px">click here for creating account</center></a>';
      }
    }
   ?>
