<?php
include '../include/admin-navigation.php';
include("../include/functions.php");


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
        <title>View Registered Events </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container mt-3">

        <h2>View Added Events</h2>
        
        <?php echo $action_result ?>

        <table class="table table-hover" width="100%" border="1" style="border-collapse:collapse; text-align: center;">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Event ID</strong></th>
                    <th><strong>Event Name</strong></th>
                    <th><strong>Event Date and Time</strong></th>
                    <th><strong>Event Venue</strong></th>
                    <th><strong>Event Description</strong></th>
                    <th><strong>Action</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count=1;
                $sel_query="SELECT * FROM tblevents ORDER BY Event_ID ASC;";
                $result = mysqli_query($con,$sel_query);

                while($row = mysqli_fetch_assoc($result)) { ?>

                <tr><td align="center"><?php echo $count; ?></td>
                <td align="center"><?php echo $row["Event_ID"]; ?></td>
                <td align="center"><?php echo $row["Event_Name"]; ?></td>
                <td align="center"><?php echo $row["Event_Date_Time"]; ?></td>
                <td align="center"><?php echo $row["Event_Venue"]; ?></td>
                <td align="center"><?php echo $row["Description"]; ?></td>

                <td align="center">
                <a href="admin-editevents.php?Event_ID=<?php echo $row["Event_ID"]; ?> "class="btn btn-info">Edit</a>
                <a href="admin-deleteevents.php?Event_ID=<?php echo $row["Event_ID"]; ?> "class="btn btn-danger">Delete</a>
                </td>
                </tr>

                <?php $count++; } ?>
            </tbody>
        </table>
    </div>
    </body>
</html>