<?php
include '../include/admin-navigation.php';
include '../include/functions.php';


# Pastikan global variable $_GET['Event_ID'] memiliki nilai
    if( empty($_GET[ 'Event_ID' ]) ) return; // stop skrip jika nilai tidak wujud


$Event_ID=$_REQUEST['Event_ID'];
$query = "SELECT * from tblevents where Event_ID='".$Event_ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error( $con ));

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Event Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container mt-3">
    <h1>Update Event Details</h1>

        <?php
            $status = "";
            if(isset($_POST['new']) && $_POST['new']==1)
            {

            $Event_ID =$_REQUEST['Event_ID'];
            $Event_Name =$_REQUEST['Event_Name'];
            $Event_Date_Time =$_REQUEST['Event_Date_Time'];
            $Event_Venue = $_REQUEST['Event_Venue'];
            $Description = $_REQUEST['Description'];

            $update="UPDATE tblevents SET Event_ID='".$Event_ID."',Event_Name='".$Event_Name."',
            Event_Date_Time='".$Event_Date_Time."', Event_Venue='".$Event_Venue."',
            Description='".$Description."' where Event_ID='".$Event_ID."'";

            mysqli_query($con, $update) or die(mysqli_error( $con ));
            $status = "Record Updated Successfully. </br></br>

            <a href='admin-viewevents.php'>View Registered Events</a>";
            echo '<p style="color:#FF0000;">'.$status.'</p>';
            }else {

        ?>
        <div class="form-floating mb-3 mt-3">
            
            <form name="form" method="post" action=""> 
            <input type="hidden" class="form-control" name="new" value="1" />

                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="Event_ID"  placeholder="Enter Event ID" 
                    required value="<?php echo $row['Event_ID'];?>" />
                </div>
                <div class="form-floating mb-3 mt-3">
                    <p><input type="text" name="Event_Name" class="form-control" placeholder="Enter Event Name" 
                    required value="<?php echo $row['Event_Name'];?>" /></p>                
                </div>
                <div class="form-floating mb-3 mt-3">
                    <p><input type="text" name="Event_Date_Time" class="form-control" placeholder="Enter Event Date/Time" 
                    required value="<?php echo $row['Event_Date_Time'];?>" /></p>                
                </div>
                <div class="form-floating mb-3 mt-3">
                    <p><input type="text" name="Event_Venue" class="form-control" placeholder="Enter Event Venue" 
                required value="<?php echo $row['Event_Venue'];?>" /></p>                
                </div>
                <div class="form-floating mb-3 mt-3">
                    <p><input type="text" name="Description" class="form-control" placeholder="Enter Event Description" 
                required value="<?php echo $row['Description'];?>" /></p>                
                </div>

                <p><input name="submit" type="submit" value="Update" /></p>
            </form>

        <?php } ?>
        </div>
    </div>
</body>
</html>