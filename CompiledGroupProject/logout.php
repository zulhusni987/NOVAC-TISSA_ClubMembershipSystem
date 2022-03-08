<?php
    session_start();
    // Destroying All Sessions
    if(session_destroy()) // Bila kita logout, username dan password akan dipadam dari memory //
    {
    // Redirecting To Home Page
    header("Location: login.php");
    }
?>