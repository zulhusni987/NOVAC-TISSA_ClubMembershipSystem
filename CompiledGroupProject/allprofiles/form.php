<?php 
include_once ('../allprofiles/processform.php');
include '../include/functions.php';
include '../include/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <a href="profiles.php">View all profiles</a>
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h4 class="text-center mb-3 mt-3">Share Your Profile</h4>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image ❤</label>
          </div>
          
          <div class="form-group">
            <label>Matric Number 💙</label>
            <textarea name="matric_number" class="form-control"> <?php echo $_SESSION["matric_number"];
                 ?></textarea>
          </div>
          
          <div class="form-group">
            <label>Name 💙</label>
            <textarea name="name" class="form-control"><?php $id = $_SESSION['id']; $sql = "SELECT * FROM tblusers WHERE Users_ID = '$id' AND user_type='members'"; echo $row['name']; ?></textarea>
          </div>          
          
          <div class="form-group">
            <label>Bio 💙</label>
            <textarea name="bio" class="form-control"></textarea>
          </div>
          
          <div class="form-group">
            <label>Instagram Link 💙</label>
            <textarea name="instagram" class="form-control"></textarea>
          </div> 
          
          <div class="form-group">
            <label>Facebook Link 💙</label>
            <textarea name="facebook" class="form-control"></textarea>
          </div>  
          
          <div class="form-group">
            <label>LinkedIn Link 💙</label>
            <textarea name="linkedin" class="form-control"></textarea>
          </div>            
          
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Upload Profile</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="scripts.js"></script>