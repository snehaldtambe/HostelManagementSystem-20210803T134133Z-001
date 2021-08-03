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

  if(isset($_POST['submit']))
  {

        foreach($_POST['status'] as $id=>$status)
        {
            // $sid=$_POST['id1'][$id];

            $roomno=$_POST['roomno'][$id];
          //   $data=$_POST['status'][$id];
             //var_dump($data);
             $stud_name1=$_POST['fName'][$id];
              //var_dump($stud_name);
              $stud_name2=$_POST['lName'][$id];
            //   $stud_roll_no=$_POST['id'][$id];
              //var_dump($stud_roll_no);
              $date=date("y-m-d");
              //var_dump($date);
            /*$stud_name=$_POST['stud_name'][$id];
            $stud_roll_no=$_POST['stud_roll_no'][$id];
            $status=$_POST['status'][$id];*/
           /* $sql="INSERT INTO `att_rec`(`roomno`, `fName`, `lName`,  `status`,`date`) VALUES ()";
            $result=$conn->prepare($sql);
            $stm=$result->execute();*/
           $sql= "INSERT into att_rec (roomno ,fName, lName, status, Adate) values('$roomno','$stud_name1','$stud_name2','$status','$date')";
         $result = $conn->query($sql);


        }
       // echo '<center>your records are successfully inserted</center>';
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
</head>
<body>
<?php include('adminheader.php');?>

 <form action="take_att_html.php" method="POST">
     <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="col-md-3">&nbsp;</div>

    <div class="container">

         <div class="col-md-6">
          <h3>take attendance of <?php echo  date("d-m-y") ;?></h3>
<table class="table table-striped"  align:"center" border="1">
            <thead>
            <tr>
                 <th>student id</th>
             <th>Room No.</th>
           
            <th>firstName</th>
            <th>lastName</th>
            <th>Status</th>
        </tr>
    </thead>

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
    $sql = "SELECT `id`,  `roomno` ,`fName` ,`lName`  FROM sdnew order by roomno ";
   /*$stm= $conn->prepare($sql);
    $result=$stm->execute();
    $data=$stm->fetchall();
    var_dump($data);*/
    $result = $conn->query($sql);

    //$sql->setFetchMode(PDO::FETCH_ASSOC);
   
        $counter=0;
    
   

 if ($result->num_rows > 0) 
 {

     while ($row = $result->fetch_assoc())
     {
             
                
                    ?>
                    <tbody>
                    <tr>
                         <td>
                   <?php echo  $row['id'] ?>
                   <input type="hidden" value="<?php echo  $row['id'] ;?>" name="id1[]">
                    </td>

                    <td>
                   <?php echo  $row['roomno'] ?>
                   <input type="hidden" value="<?php echo  $row['roomno'] ;?>" name="roomno[]">
                    </td>

                   

                    <td>
                   <?php echo  $row['fName'] ?>
                   <input type="hidden" value="<?php echo  $row['fName'] ;?>" name="fName[]">
                    
                    </td>
                    <td>
                   <?php echo  $row['lName'] ?>
                   <input type="hidden" value="<?php echo  $row['lName'] ;?>" name="lName[]">
                    
                    </td>
                   

                    <td>
                      <div class="radio-inline">
                    <label><input type="radio" name="status[<?php echo  $counter; ?>]" value="present" checked="checked">Present</label>
                    &nbsp;  &nbsp;  &nbsp;
                     <label><input type="radio" name="status[<?php echo  $counter; ?>]" value="absent" >Absent</label>
                    </div>
                    

                        
                    </td>
                </tr>
                </tbody>
                <?php
                  $counter++; 
                  
                
                   
     }
      }
     ?>
    </table>
</div>
</div>
 <div class="col-md-4">&nbsp;</div>

   
     <button type="submit"   name="submit" class="btn btn-primary" value="submit"  style="background-color:#0C3955;" padding: "5px 30px";>Submit</button>
 </form>
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