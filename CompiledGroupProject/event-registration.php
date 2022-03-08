<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
include 'include/functions.php';
include 'include/navigation.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Event Registration</title>
    </head>
    <body>
        <div class="container mt-3">
            <h1>Event Registration</h1>
        <form role="form" method="POST">
                 Member ID:  
                <?php echo $_SESSION["id"];
                 ?> <input type="hidden" name="Members_ID" value="<?php echo $_SESSION["id"];
                 ?>" >
                 <br>
                 Matric Number: 
                    <?php echo $_SESSION["matric_number"];
                 ?>  <input type="hidden" name="Matric_Number" value="<?php echo $_SESSION["matric_number"];
                 ?>" >
                 <br>
                 Event ID: <input type="text" name="Event_ID" > <br>
                 <br>
                 <input type="submit" class="btn btn-success" value="Submit">
                 <input type="reset" class="btn btn-secondary" value="Clear"> 
        </form>
            <?php
        if 
            ($_SERVER["REQUEST_METHOD"]=="POST"){
             
            $Members_ID=$_POST["Members_ID"];
            $Matric_Number=$_POST["Matric_Number"];
            $Event_ID=$_POST["Event_ID"];
             
            $sql="INSERT INTO tblregistration (Users_ID, Matric_Number, Events_ID) VALUES ('$Members_ID', '$Matric_Number', '$Event_ID')";
            $result= mysqli_query($con, $sql);
                    if ($result){
                         echo "Successfully registered to ". $Event_ID."<br>" ; 
                    
            $sql1="SELECT * FROM tblevents WHERE Event_ID='$Event_ID'";
            $result1=mysqli_query($con, $sql1) or die (mysqli_error($con));
            $rows = mysqli_num_rows($result1);
                    if($rows!=1){
                         echo "<h3>Event ID is not valid</h3>";            
                    }else{
            $rows = mysqli_fetch_array($result1);    
                         echo "Event ID: " .$rows['Event_ID']. "<br>";
                         echo "Event Name: " .$rows['Event_Name']. "<br>"; 
                         echo "Event Date and Time: " .$rows['Event_Date_Time']. "<br>"; 
                         echo "Event Venue:" .$rows['Event_Venue']. "<br>";   
                    }
                                     } else {
                                         echo "Error:".$sql1."<br>" . mysqli_error($con); 
                                     }
            }

        ?>
    <a href="event-view.php">View upcoming events</a>
    </body>
        </div>
        
            
</html>