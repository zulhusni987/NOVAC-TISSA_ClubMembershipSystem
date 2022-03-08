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
        <title>Admin Approval</title>
               
    </head>
    <body>
        <div class="container mt-3">
            <h1>Admin Register</h1>
            
            <table class="table table-hover" id="users" style="text-align: center;">
                <tr>
                    <th>Users_ID</th>
                    <th>Name</th>
                    <th>Matric Number</th>
                    <th>Courses</th>
                    <th>Username</th>
                    <th>Email Address</th>
                    <th>User Type</th>
                    <th>Password</th>
                    <th>Date Registered</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                
                <?php
                    $query = "SELECT * FROM tblusers WHERE status ='pending' AND user_type='admin' ORDER BY Users_ID ASC";
                    $result = mysqli_query($con, $query);
                    while($row = mysqli_fetch_array($result)) {    
                ?>
                <tr>
                    <td><?php echo $row['Users_ID'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['matrics_number'];?></td>
                    <td><?php echo $row['courses'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['user_type'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['trn_date'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td>
                        <form action="admin-adminapproval.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['Users_ID'];?>"/>
                            <input type="submit" name="approve" class="btn btn-success" value="Approve"/>
                            <input type="submit" name="deny" class="btn btn-danger"value="Deny"/>
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
                $admin_id = $_POST["id"];
                
                $select = "UPDATE tblusers SET status = 'approved' WHERE Users_ID ='$admin_id'";
                $result = mysqli_query($con, $select);
                
                echo '<script>alert("Admin Approved!"); window.location.href = "admin-adminapproval.php"</script>';
            }
            
            if(isset($_POST['deny'])){
                $admin_id = $_POST['id'];
                
                $select = "DELETE FROM tblusers WHERE Users_ID ='$admin_id'";
                $result = mysqli_query($con, $select);
                
                echo '<script>alert("Admin Denied!"); window.location.href = "admin-adminapproval.php"</script>';
            }
        
        ?>
    </body>
</html>

