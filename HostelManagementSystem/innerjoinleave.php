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

<h1><font color="red">LEAVE APPLICATION FROM STUDENTS</h1>
    <div class="row">&nbsp</div>
      <div class="row">&nbsp</div>
      <center>
<img src="img11.png" height="250px" width="1300px"></center>
      <div class="row">&nbsp</div>
      <div class="row">&nbsp</div>
    <table class="data-table">
        <thead>
            <tr>
               <th>ID</th>
               <th>fName</th>
               <th>lName</th>
              
               <th>Contact NO</th>
                 <th> Parent Contact NO</th>
                 <th> OUT DATE</th>
                 <th> IN DATE</th>

               <th>REASON OF LEAVE</th>
               
            </tr>
        </thead>
        <tbody>
                     <?php
                           
                $sql="select sdnew.id ,sdnew.fName ,sdnew.lName, sdnew.contact,sdnew.parent_contact, leave_app.odate, leave_app.idate,leave_app.reason1 from sdnew INNER JOIN leave_app on sdnew.id=leave_app.id order by odate ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
                       
                        while($row = $result->fetch_assoc())
                         {
                          
                          
                            echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["fName"]."</td>
                            <td>".$row["lName"]."</td>
                             <td>".$row["contact"]."</td>
                             <td>".$row["parent_contact"]."</td>

                             <td>".$row["odate"]."</td>

                            <td>".$row["idate"]."</td>
                           
                            <td>".$row["reason1"]."</td>
                            </tr>";

                        }
                     }
                    ?>
</tbody>
</table>
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