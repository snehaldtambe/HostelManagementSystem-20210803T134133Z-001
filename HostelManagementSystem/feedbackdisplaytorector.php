 <?php
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
<style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }

        table td {
            transition: all .5s;
        }
        
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
            margin-left: 300px;
        }

        .data-table th, 
        .data-table td {
            border: 3px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>
<?php include('adminheader.php');?>

<font color="red">
    <h1>Feedback From Students</h1>
        <div class="row">&nbsp</div>
        <p><center><font color="Green">Click on image for<u> Average Feedback.</u></center></p>
           <center>
            <a href="avragefeedback.php">

<img src="feed1.jpg"    height="120px" width="120px"></center>
      <div class="row">&nbsp</div>
      <div class="row">&nbsp</div>
        <font color="black">

    <table class="data-table">
        <thead>
            <tr>
               <th>ID</th>
               <th>fName</th>
               <th>lName</th>
               <th>Food Quality</th>
               <th>Food Variety</th>
               <th>Food Taste</th>
               <th>Electricity Supply</th>
               <th>Water Supply</th>
               <th>Other</th>
               <th>Overall</th>
               <th>Suggetions</th>
               
            </tr>
        </thead>
        <tbody>
        <?php
        
$sql = "SELECT * FROM `feedbacktable` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["fName"]."</td>
        <td>".$row["lName"]."</td>
        <td>".$row["food_quality"]."</td>
        <td>".$row["food_variety"]."</td>
        <td>".$row["food_taste"]."</td>
        <td>".$row["electricity"]."</td>
        <td>".$row["water"]."</td>
        <td>".$row["other_facility"]."</td>
        <td>".$row["oveall"]."</td>
        <td>".$row["suggetions"]."</td>
              
        </tr>";

    }
        }
?>
        </tbody>
       
    </table>

    

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