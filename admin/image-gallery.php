<?php
include'config.php';

$view_gallery = "select * from image_gallery";
$run_query = mysqli_query($conn, $view_gallery);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Image Gallery | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Image Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Image Gallery</li>
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
                                                        <th>Gallery ID</th>
                                                        <th>Gallery Title</th>
                                                        <th>Gallery Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $g_id = $row['gallery_id'];
                                                $g_title = $row['gallery_title'];
                                                $g_img = $row['gallery_img'];
                                                
                                            
                                                    echo "<tr data-id='1'>
                                                        <td data-field='banner_id' style='width: 80px'> ".$g_id.".</td>
                                                        <td data-field='banner_title' class='banner_title'>".$g_title."</td>
                                                        <td data-field='banner_img' class='banner_img'>
                                                            <img src='events/".$g_img."'>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href='edit-gallery.php?id=$g_id' class='btn btn-outline-secondary btn-sm edit' title='Edit'>
                                                                <i class='fas fa-pencil-alt'></i>
                                                            </a>
                                                            <a href='delete-gallery.php?id=$g_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Gallery is Empty.</span>";
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

