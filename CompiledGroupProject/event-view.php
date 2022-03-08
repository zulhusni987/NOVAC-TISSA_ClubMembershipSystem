<?php

include'include/functions.php';
include 'include/navigation.php';


# Untuk paparan mesej bagi setiap action
    $action_result = '';
    if ( !empty($_SESSION[ 'action_result' ]) ) {
        $action_result = "<span>{$_SESSION[ 'action_result' ]}</span>";
        unset($_SESSION[ 'action_result' ]);
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Upcoming Events </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    </head>
    <body>
    <div class="container mt-3">
        <h2>View Upcoming Events</h2>
        
        <?php echo $action_result ?>

        <div class="row">
        <?php
                $count=1;
                $sel_query="SELECT * FROM tblevents ORDER BY Event_ID desc;";
                $result = mysqli_query($con,$sel_query);

                while($row = mysqli_fetch_assoc($result)) { 
        ?>
            <div class="col-sm-6" style="padding-bottom:50px;">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="download.png" class="img-fluid" alt="Responsive image">
                        
                         <p class="card-text">Event ID <br>
                            <span><?php echo $row["Event_ID"]; ?></span>   
                            
                        <p class="card-text">Event Name <br>
                            <span><?php echo $row["Event_Name"]; ?></span>
                        </p>
                        
                        <p class="card-text">Event Date and Time <br>
                            <span><?php echo $row["Event_Date_Time"]; ?></span>
                        </p>
                        
                        <p class="card-text">Event Venue <br>
                            <span><?php echo $row["Event_Venue"]; ?></span>
                        </p>
                        
                        <p class="card-text">Event Description <br>
                            <span><?php echo $row["Description"]; ?></span>
                        </p>
                        

                        <p><a href="event-registration.php" class="btn btn-info">Register Event</a></p>
                        
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
    </body>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
</html>