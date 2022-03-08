<?php
include'include/functions.php';
include 'include/navigation.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Merit</title>
               
    </head>
    <body>
        <div class="container mt-3">
            <h1>Merit</h1>
            
            <form action="merit-submission.php" method="POST">
                <label for="event">Event:</label>
                <?php $sql = "SELECT * FROM tblevents";
                
                echo '<select name="event">'; // Open your drop down box
                if ($result = mysqli_query($con, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
                  printf ("%s (%s)\n", $row[0], $row[1]);
                  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                }
                mysqli_free_result($result);
                }
                echo '</select>';// Close your drop down box
                ?>
                <br>
                <label for="screenshot">Screenshot:</label>
                    <input type="file" name="screenshot" required/><br>
                <?php 
                
                /* $sql = "SELECT * FROM tblevents";
                
                echo '<select name="date">'; // Open your drop down box
                if ($result = mysqli_query($con, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
                  printf ("%s (%s)\n", $row[1], $row[2]);
                  echo '<option value="'.$row[1].'">'.$row[2].'</option>';
                }
                mysqli_free_result($result);
                }
                echo '</select>';// Close your drop down box
                ?>
                <label for="venue">Venue:</label>
                <?php $sql = "SELECT * FROM tblevents";
                
                echo '<select name="venue">'; // Open your drop down box
                if ($result = mysqli_query($con, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
                  printf ("%s (%s)\n", $row[2], $row[3]);
                  echo '<option value="'.$row[2].'">'.$row[3].'</option>';
                }
                mysqli_free_result($result);
                }
                echo '</select>';// Close your drop down box
                */ ?>
                    <br>
                    <input type="submit" name="merit" class="btn btn-success" value="Submit"><br><br>
          
            </form>
        </div>
    </body>
</html>
    
<?php
if(isset($_POST['merit'])) {
    $Members_ID=$_SESSION["id"];
    $Matric_Number=$_SESSION["matric_number"];

    $Event_ID=$_POST["event"];
    $screenshot = $_POST['screenshot'];
    $merit_point = 5; 
            
    $select = "SELECT * FROM tblmerit WHERE Event_ID = '$Event_ID' AND Users_ID =".$_SESSION["id"];
    $result = mysqli_query($con, $select) or die ( mysqli_error($con));
    
    if(mysqli_num_rows($result)>0) {
          
        
        
        echo '<script>alert("Merit already submitted!")</script>';
    }else{
        $sql1="SELECT * FROM tblevents WHERE Event_ID='$Event_ID'";
        $result1=mysqli_query($con, $sql1) or die (mysqli_error($con));
        $rows = mysqli_num_rows($result1);
            if($rows<1){
                 echo "<h3>Event ID is not valid</h3>";            
            }else{
            echo '<script>alert("Your event merit is now in pending!");</script>';
        $rows = mysqli_fetch_array($result1);    
            echo "Event ID: " .$rows['Event_ID']. "<br>";
            echo "Event Name: " .$rows['Event_Name']. "<br>";
            echo "Event Date / Time: " .$rows['Event_Date_Time']. "<br>";
            echo "Event Venue: " .$rows['Event_Venue']. "<br>"; 
        $event_date = date('Y-m-d', strtotime($rows['Event_Date_Time']));
        $merit = "INSERT INTO tblmerit (Users_ID, Matric_Number, Event_ID, Event_Name, Event_Date, Merit_Point, Upload_Screenshot, Status) VALUES (".$_SESSION["id"].", ".$_SESSION["matric_number"].", ".$rows['Event_ID'].", '".$rows['Event_Name']."', '$event_date', $merit_point, '$screenshot', 'pending')";
        mysqli_query($con, $merit) or die ( mysqli_error($con));
       }
    }
        
    }


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
