<?php
include'config.php';

$view_team = "select * from member_list";
$run_query = mysqli_query($conn, $view_team);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Member List | NGO - We For You Organization</title>
    <?php include'style.php'; ?>
</head>

<body>
        <!-- Begin page -->
        <div id="layout-wrapper">
    <?php include'header.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Member List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Member List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class='table table-editable table-nowrap align-middle table-edits'>
                                                <thead>
                                                    <tr>
                                                        <th>Member ID</th>
                                                        <th>Member Name</th>
                                                        <th>Member Title</th>
                                                        <th>Member Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $member_id = $row['member_id'];
                                                $member_name = $row['member_name'];
                                                $member_title = $row['member_title'];
                                                $member_img = $row['member_img'];
                                                
                                                    echo "<tr data-id='1'>
                                                        <td data-field='member_id' style='width: 80px'> ".$member_id.".</td>
                                                        <td data-field='member_name' class='member_name'>".$member_name."</td>
                                                        <td data-field='member_title' class='member_title'>
                                                            <p>".$member_title."</p>
                                                        </td>
                                                        <td data-field='member_img' class='member_img'>
                                                            <img src='team-images/".$member_img."'>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href='edit-member.php?id=$member_id' class='btn btn-outline-secondary btn-sm edit' title='Edit'>
                                                                <i class='fas fa-pencil-alt'></i>
                                                            </a>
                                                            <a href='delete-member.php?id=$member_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Member list is Empty.</span>";
                                            }

                                             ?>
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>

    <?php include'right-sidebar.php'; ?>

    <?php include'script.php'; ?>

</body>
</html>

