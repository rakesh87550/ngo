<?php
include'config.php';
$view_banners = "select * from banner_slider";
$run_query = mysqli_query($conn, $view_banners);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Banner List | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Banner List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Banner List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Banner Datalist</h4>
                                        <p class="card-title-desc">Banner Datalist is the list of all banner uploaded for main Home page Banner Slider.</p>
                                    </div>
                                    <div class="card-body">
        
                                        <div class="table-responsive">
                                            

                                            <table class='table table-editable table-nowrap align-middle table-edits'>
                                                <thead>
                                                    <tr>
                                                        <th>Banner ID</th>
                                                        <th>Banner Title</th>
                                                        <th>Banner Content</th>
                                                        <th>Banner Image</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            if($run_query-> num_rows > 0){

                                             while($row = mysqli_fetch_assoc($run_query)) { 
                                                $banner_id = $row['id'];
                                                $banner_title = $row['banner_title'];
                                                $banner_content = $row['banner_content'];
                                                $banner_img = $row['banner_img'];
                                                
                                            
                                                    echo "<tr data-id='1'>
                                                        <td data-field='banner_id' style='width: 80px'> ".$banner_id.".</td>
                                                        <td data-field='banner_title' class='banner_title'>".$banner_title."</td>
                                                        <td data-field='banner_content' class='banner_content'>
                                                            <p>".$banner_content."</p>
                                                        </td>
                                                        <td data-field='banner_img' class='banner_img'>
                                                            <img src='banner/".$banner_img."'>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href='edit-banner.php?id=$banner_id' class='btn btn-outline-secondary btn-sm edit' title='Edit'>
                                                                <i class='fas fa-pencil-alt'></i>
                                                            </a>
                                                            <a href='delete-banner.php?id=$banner_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                            } 
                                            }
                                            else{
                                                echo "<span style='color:#fe0002;font-size:15px;'>Banner list is Empty.</span>";
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

