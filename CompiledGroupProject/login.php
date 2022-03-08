<?php
include 'include/db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Login</title>
               
    </head>
    <body>

  <section class="vh-200" style="background-color: #b00216;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
              <img src="download.png" class="img-fluid" alt="Phone image">
            <h3 class="mb-5">Club Membership System</h3>
             <form action="servers.php" method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" placeholder="Enter your username here" required />
            <label class="form-label" for="form1Example13"></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" placeholder="Enter your password here" required/>
            <label class="form-label" for="form1Example23"></label>
          </div>
          <label for="select"><b>Select:</b></label>
          <select class="form-input" name="select">
                    <option value="Admin">Admin</option>
                    <option value="Members">Members</option>
                </select><br> 
          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
           
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-success btn-lg btn-block" name="login" value="Login">Login</button>
        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>


        </form>
            
            
            <hr class="my-4">

          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
        
  
    </body>
</html>


