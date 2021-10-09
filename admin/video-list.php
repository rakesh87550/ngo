<?php
include'config.php';
$view_data = "select * from video_gallery";
$run_query = mysqli_query($conn, $view_data);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Video Gallery | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Video Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Video Gallery</li>
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
                                                        <th>Video ID</th>
                                                        <th>Video Title</th>
                                                        <th>Videos</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            if($run_query-> num_rows > 0){

                                            while($row = mysqli_fetch_assoc($run_query)) { 
                                                $v_id = $row['video_id'];
                                                $v_title = $row['video_title'];
                                                $v_location = $row['video_location'];
                                                
                                            
                                                    echo "<tr data-id='1'>
                                                        <td data-field='video_id' style='width: 80px'> ".$v_id.".</td>
                                                        <td data-field='video_title' class='video_title'>".$v_title."</td>
                                                        <td data-field='video_location' class='video_location'>
                                                            <video src='videos-gallery/".$v_location."' controls width='200px' height='100px' ></video>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href=''></a>
                                                            <a href='delete-video.php?id=$v_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Video Gallery is Empty.</span>";
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

