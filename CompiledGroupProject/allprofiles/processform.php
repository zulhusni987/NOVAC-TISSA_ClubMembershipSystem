<?php
  $msg = "";
  $msg_class = "";
  $con = mysqli_connect("localhost", "root", "", "clubmembershipsystem");
  if (isset($_POST['save_profile'])) {
    // for the database
    $matric_number = stripslashes($_POST['matric_number']); 
    $name = stripslashes($_POST['name']);
    $bio = stripslashes($_POST['bio']);
    $instagram = stripslashes($_POST['instagram']);
    $facebook = stripslashes($_POST['facebook']);
    $linkedin = stripslashes($_POST['linkedin']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 5000000) {
      $msg = "Image size should not be greated than 5MB";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO tblallmembers SET profile_image='$profileImageName', matric_number= '$matric_number', name= '$name', bio='$bio', instagram= '$instagram', facebook= '$facebook', linkedin= '$linkedin'";
        if(mysqli_query($con, $sql)){
          $msg = "Congratulations! Your profile details have uploaded. Other members can get to know you now.";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error. Please make sure you fill in all the details";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an error uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>