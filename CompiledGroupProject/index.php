<?php
include('include/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
//...
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="style.css">
        <title>Club Membership System</title>
               
    </head>
    <body>
        <div class="center">
            <h1>Welcome to the Club Membership System</h1>
            
            <form action="" method="POST">
                <div class="link">
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>  
                </div>

                    
            </form>
        </div>
    </body>
</html>

<?php

    
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

