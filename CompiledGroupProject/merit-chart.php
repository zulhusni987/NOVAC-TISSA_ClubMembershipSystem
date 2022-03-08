<?php
include "include/navigation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Merit Chart</title>
    </head>
    <body>
        <div class="container mt-3">
            <h1>Merit Tracker</h1>
            <form action="merit-submission.php">
                <button class="btn btn-success">Submit request for merit</button><br><br>
            </form>
            
<?php
    
    $query_1 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(Event_Date)= 1) AND Users_ID =".$_SESSION['id'];
    $result_1 = mysqli_query($con, $query_1);
    $row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
    
    $query_2 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 2) AND Users_ID =".$_SESSION['id'];
    $result_2 = mysqli_query($con, $query_2);
    $row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
    
    $query_3 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 3) AND Users_ID =".$_SESSION['id'];
    $result_3 = mysqli_query($con, $query_3);
    $row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
    
    $query_4 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 4) AND Users_ID =".$_SESSION['id'];
    $result_4 = mysqli_query($con, $query_4);
    $row_4 = mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
    
    $query_5 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 5) AND Users_ID =".$_SESSION['id'];
    $result_5 = mysqli_query($con, $query_5);
    $row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
    
    $query_6 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 6) AND Users_ID=".$_SESSION['id'];
    $result_6 = mysqli_query($con, $query_6);
    $row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
    
    $query_7 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 7) AND Users_ID =".$_SESSION['id'];
    $result_7 = mysqli_query($con, $query_7);
    $row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
    
    $query_8 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 8) AND Users_ID =".$_SESSION['id'];
    $result_8 = mysqli_query($con, $query_8);
    $row_8 = mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
    
    $query_9 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 9) AND Users_ID =".$_SESSION['id'];
    $result_9 = mysqli_query($con, $query_9);
    $row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
    
    $query_10 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 10) AND Users_ID =".$_SESSION['id'];
    $result_10 = mysqli_query($con, $query_10);
    $row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
    
    $query_11 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 11) AND Users_ID =".$_SESSION['id'];
    $result_11 = mysqli_query($con, $query_11);
    $row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
    
    $query_12 = "SELECT SUM(Merit_Point) AS value_sum FROM tblmerit WHERE Status='approved' AND (SELECT MONTH(event_date)= 12) AND Users_ID =".$_SESSION['id'];
    $result_12 = mysqli_query($con, $query_12);
    $row_12 = mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];
	
?>
<?php
 
$dataPoints = array(
	array("y" => $sum_1, "label" => "Jan"),
        array("y" => $sum_2, "label" => "Feb"),
        array("y" => $sum_3, "label" => "Mar"),
        array("y" => $sum_4, "label" => "Apr"),
        array("y" => $sum_5, "label" => "May"),
        array("y" => $sum_6, "label" => "June"),
        array("y" => $sum_7, "label" => "July"),
        array("y" => $sum_8, "label" => "Aug"),
        array("y" => $sum_9, "label" => "Sept"),
        array("y" => $sum_10, "label" => "Oct"),
        array("y" => $sum_11, "label" => "Nov"),
        array("y" => $sum_12, "label" => "Dec"),
    );

//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, -username,your your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=clubmembershipsystem;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare('select Event_Date, Merit_Point from tblmerit'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
		
    // foreach($result as $row){  
    //   array_push($dataPoints, array("event_date"=> $row->event_date, "Merit_Point"=> $row->Merit_Point));
    // }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Merit Chart"
	},
	data: [{
		type: "line", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   
                </div>
  </body>
</html>