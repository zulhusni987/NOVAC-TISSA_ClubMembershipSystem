<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<?php
include '../include/admin-navigation.php';
include '../include/functions.php';

?>

<html>

<head>
    <title>List of Participants on Event Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
    <div class="container mt-3">
         <h1> List of Participants on Event Registration</h1>
         <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Event ID" title="Type in an Event Code">
        <table class="table table-hover" id="myTable" style="text-align: center;">
        <thead>
                <tr>
                         <th>Registration ID</th>
                         <th>Members ID</th>
                         <th>Matric Number</th>
                         <th>Event ID</th>

                </tr>
        </thead>
        <tbody>
                <?php
                         $query="SELECT*FROM tblregistration";
                         $run_query = mysqli_query($con, $query) or die (mysqli_error($con));
                         if (mysqli_num_rows($run_query) > 0 ){
                             while ($row = mysqli_fetch_array($run_query)) {
                                 $Registration_ID=$row['Registration_ID'];
                                 $Members_ID=$row['Users_ID'];
                                 $Matric_Number=$row['Matric_Number'];
                                 $Event_ID=$row['Events_ID'];
                ?>
                                 <tr>
                                          <td><?php echo $Registration_ID; ?> </td>
                                          <td><?php echo $Members_ID; ?> </td>
                                          <td><?php echo $Matric_Number; ?> </td>
                                          <td><?php echo $Event_ID; ?> </td>
                         
                                 </tr>
                 <?php
                         }
                         }else{
                         echo "<script>alert(No Record yet!)";
                         }
                 ?>   
        </tbody>
    </table>
    </div>
    
            <script>
                 function myFunction() {
                  var input, filter, table, tr, td, i, txtValue;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  table = document.getElementById("myTable");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[3];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      } else {
                        tr[i].style.display = "none";
                      }
                    }       
                  }
                }
        </script>
</body>
</html>