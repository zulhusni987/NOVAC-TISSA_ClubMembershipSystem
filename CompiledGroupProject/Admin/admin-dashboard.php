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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <title>Admin Dashboard</title>
               
    </head>
    <body>
        <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php

                    $query = "SELECT Users_ID FROM tblusers WHERE status='approved' AND user_type='members' ORDER BY Users_ID";  
                    $query_run = mysqli_query($con, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4 class="fs-2">'.$row.'</h4>';
                ?></h3>
                                <p class="fs-5">Total Active Members</p>
                            </div>
                            <i class="bi bi-person-check-fill fa-3x primary-text rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                $query = "SELECT Users_ID FROM tblusers WHERE status='pending' AND user_type='members' ORDER BY Users_ID";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>'.$row.'</h4>';
            ?></h3>
                                <p class="fs-5">Total Pending Members</p>
                            </div>
                            <i
                                class="bi bi-person-plus-fill fa-3x primary-text rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-4 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"> <?php
                $query = "SELECT Users_ID FROM tblusers WHERE status='approved' AND user_type='admin' ORDER BY Users_ID";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>'.$row.'</h4>';
            ?></h3>
                                <p class="fs-5">Total Active Admin</p>
                            </div>
                            <i class="fas fa-user-cog fs-1 primary-text rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-4 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                $query = "SELECT Users_ID FROM tblusers WHERE status='pending' AND user_type='admin' ORDER BY Users_ID";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4>'.$row.'</h4>';
            ?></h3>
                                <p class="fs-5">Total Pending Admin</p>
                            </div>
                            <i class="fas fa-user-edit fs-1 primary-text rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                $query = "SELECT * FROM tblmerit WHERE Status='pending'";
                $query_run = mysqli_query($con, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> '.$row.'</h4>';
            ?></h3>
                                <p class="fs-5">Total Pending Merit Approval</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
    </body>
    </html>

