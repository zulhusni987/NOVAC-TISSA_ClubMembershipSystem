<?php
  $con = mysqli_connect("localhost", "root", "", "clubmembershipsystem");
  $results = mysqli_query($con, "SELECT * FROM tblallmembers");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
  include '../include/functions.php';
  include '../include/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List of Members</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


   
<body>
   <div class="container mt-3">    
   <h1>List of Members</h1>
  
    <div class="row">
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
        <a href="form.php" class="btn btn-success">Upload Yours Now!❤️</a>
        <br>
        <br>
        <table class="table table-hover" id="users" style="text-align: center;">
          <thead>
            <th>Image</th>
            <th>Matric Number</th>  
            <th>Name</th>
            <th>Bio</th>
            <th>Instagram Link</th>
            <th>Facebook Link</th>
            <th>LinkedIn Link</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </td>
                <td> <?php echo $user['matric_number']; ?> </td>
                <td> <?php echo $user['name']; ?> </td> 
                <td> <?php echo $user['bio']; ?> </td> 
                <td> <?php echo $user['instagram']; ?> </td> 
                <td> <?php echo $user['facebook']; ?> </td> 
                <td> <?php echo $user['linkedin']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>