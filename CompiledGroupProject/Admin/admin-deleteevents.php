<?php
include '../include/admin-navigation.php';
include '../include/functions.php';

# Pastikan global variable $_GET['Event_ID'] memiliki nilai
    if( empty($_GET[ 'Event_ID' ]) ) return; // stop skrip jika nilai tidak wujud
    
$Event_ID=$_REQUEST['Event_ID'];


$query = "DELETE FROM tblevents WHERE Event_ID=$Event_ID"; 

$success = mysqli_query($con,$query) or die ( mysqli_error( $con ));
if ( $success ) {
    $_SESSION[ 'action_result' ] = 'Event has been deleted successfully!';
}

header("Location: admin-viewevents.php"); 
?>