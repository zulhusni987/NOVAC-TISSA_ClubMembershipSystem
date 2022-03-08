<?php
include '../include/admin-navigation.php';
include '../include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Merit Approval</title>         
    </head>
    <body>
        <div class="container mt-3">
            <h1>Approve Merit</h1>            
            <table class="table table-hover" id="users" style="text-align: center;">
                <tr>
                    <th>Members ID</th>
                    <th>Matric Number</th>
                    <th>Event ID</th>
                    <th>Event Name</th>
                    <th>Event Date</th>
                    <th>Merit Point</th>
                    <th>Screenshot</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                
                <?php
                    $query = "SELECT * FROM tblmerit WHERE Status ='pending' ORDER BY Users_ID ASC";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)) {    
                ?>
                <tr>
                    <td><?php echo $row['Users_ID'];?></td>
                    <td><?php echo $row['Matric_Number'];?></td>
                    <td><?php echo $row['Event_ID'];?></td>
                    <td><?php echo $row['Event_Name'];?></td>
                    <td><?php echo $row['Event_Date'];?></td>
                    <td><?php echo $row['Merit_Point'];?></td>
                    <td><?php echo $row['Upload_Screenshot'];?></td>
                    <td><?php echo $row['Status'];?></td>
                    <td>
                        <form action="../Admin/admin-meritapproval.php" method="POST">
                            <input type="hidden" name="members-id" value="<?php echo $row['Users_ID'];?>"/>
                            <input type="hidden" name="event-id" value="<?php echo $row['Event_ID'];?>"/>
                            <input type="hidden" name="merit_point" value="<?php echo $row['Merit_Point'];?>"/>
                            <input type="submit" name="approve" class="btn btn-success" value="Approve"/>
                            <input type="submit" name="deny" class="btn btn-danger" value="Deny"/>
                        </form>
                    </td>
                </tr>
            <?php
                    }
            ?> 
            </table>
            
            
        </div>
        
        <?php
            if(isset($_POST['approve'])){
                $merit_point = $_POST['merit_point'];
                $event_id = $_POST['event-id'];
                $members_id = $_POST["members-id"];
                $select = "UPDATE tblmerit SET Status = 'approved' WHERE Event_ID=$event_id AND Users_ID =$members_id";
                $result = mysqli_query($con, $select) or die ( mysqli_error($con));
                
                echo '<script>alert("Merit Approved!"); window.location.href = "../Admin/admin-meritapproval.php"</script>';
            }
            
            if(isset($_POST['deny'])){
                $merit_point = $_POST['merit_point'];
                $event_id = $_POST['event-id'];
                $members_id = $_POST["members-id"];
                $select = "DELETE FROM tblmerit WHERE Event_ID='$event_id' AND Users_ID =$members_id";
                $result = mysqli_query($con, $select) or die ( mysqli_error($con));
                
                echo '<script>alert("Merit Denied!"); window.location.href = "../Admin/admin-meritapproval.php"</script>';
            }
        
        ?>
        
    </body>
</html>

