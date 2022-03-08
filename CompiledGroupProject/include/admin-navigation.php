<?php
include 'db_connection.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sidenav {
            color: white;
            
        }
        .dropdown-btn {
            color: white;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 20px;
          display: block;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          cursor: pointer;
          outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
          color: #f1f1f1;
        }

       
    </style>      
    </head>
    <body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color:#b8000c; color:#ffffff;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" style="background-color:#b8000c; color:#ffffff;"
  onclick="w3_close()">Close &times;</button>
        <div class="sidenav">
            <a href="../Admin/admin-dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
            <a href="../Admin/admin-membersapproval.php" class="w3-bar-item w3-button">Members</a><br>
            <a href="../Admin/admin-adminapproval.php" class="w3-bar-item w3-button">Admin</a><br>
            <button class="dropdown-btn">Events 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
              <a href="../Admin/admin-eventregistration.php" class="w3-bar-item w3-button">View registered participants</a>
              <a href="../Admin/admin-addevents.php" class="w3-bar-item w3-button">Add events</a>
              <a href="../Admin/admin-viewevents.php" class="w3-bar-item w3-button">View events</a>
            </div>
            <a href="../Admin/admin-meritapproval.php" class="w3-bar-item w3-button">Merit</a><br>
            <a href="../Admin/admin-feedback.php" class="w3-bar-item w3-button">Feedback</a><br>
            <a href="../logout.php" class="w3-bar-item w3-button">Log Out</a><br>
        </div> 


</div>

<div id="main">

<div style="background-color:#b8000c; color:#ffffff;">
  <button id="openNav" class="w3-button w3-xlarge" style="background-color:#b8000c; color:#ffffff;" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
        <img src="../img/unnamed.png" class="float-end" alt="NOVAC-TISSA" style="width:250px;"/>
        <h1>Welcome to Club Membership System (Admin Side)</h1>
                <h2 style="font-size: 35px;">
                    <i>
            <?php
        $sql = "SELECT * FROM tblusers";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "Hello,"; 
        echo $_SESSION['user']. "<br>";
        ?></h2>
                    </i>
        

  </div>
</div>



<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
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
