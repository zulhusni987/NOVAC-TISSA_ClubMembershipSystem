<?php
include '../include/admin-navigation.php';
include '../include/functions.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    

    $Event_ID =$_POST['event_id'];
    $Event_Name =$_POST['name'];
    $Event_Date_Time = $_POST['date'];
    $Event_Venue =  $_POST['venue'];
    $Description = $_POST['description'];
    
    $ins_query="INSERT INTO tblevents (Event_ID, Event_Name, Event_Date_Time, Event_Venue, Description) VALUES ('$Event_ID','$Event_Name','$Event_Date_Time','$Event_Venue', '$Description')" ;
    
    mysqli_query($con,$ins_query) or die(mysqli_error($con));
    
    $status = "New Event Registered Successfully.
    </br></br><a href='admin-viewevents.php'>View Registered Events</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
<div>
    
<h1>Register New Event</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<div  class="form-floating mb-3 mt-3">
    <input type="text"  class="form-control" name="event_id" placeholder="Enter Event ID" required />
    <label for="event_id">Event ID</label>
</div>
<div  class="form-floating mb-3 mt-3">
    <input type="text"  class="form-control" name="name" placeholder="Enter Event Name" required />
    <label for="name">Event Name</label>
</div>
<div  class="form-floating mb-3 mt-3">
    <input type="date"  class="form-control" name="date" placeholder="Enter Event Date and Time" required />
    <label for="date">Event Date and Time</label>
</div>
<div  class="form-floating mb-3 mt-3">
    <input type="text"  class="form-control" name="venue" placeholder="Enter Event Venue" required />
    <label for="venue">Event Venue</label>
</div>
<div  class="form-floating mb-3 mt-3">
    <input type="text"  class="form-control" name="description" placeholder="Enter Event Description" required />
    <label for="description">Event Description</label>
</div>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>

<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>