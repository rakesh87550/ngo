<?php
include'config.php';
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Inquiries</span>
                                                <?php
                                                $query = "SELECT * FROM contact_inquiry";
      
                                                // Execute the query and store the result set
                                                $result = mysqli_query($conn, $query);
                                                  
                                                if ($result)
                                                {
                                                $row = mysqli_num_rows($result);
                                                if ($row)
                                                    {
                                                ?>
                                                <h4 class="mb-3"><span class="counter-value" data-target="<?php echo $row; ?>">0</span></h4>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </div>
    
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+2.9k</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total News</span>
                                                <?php
                                                $query = "SELECT * FROM news";
      
                                                // Execute the query and store the result set
                                                $result = mysqli_query($conn, $query);
                                                  
                                                if ($result)
                                                {
                                                $row = mysqli_num_rows($result);
                                                if ($row)
                                                    {
                                                ?>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $row; ?>">0</span>
                                                </h4>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-danger">29 News</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Events</span>
                                                <?php
                                                $query = "SELECT * FROM event_list";
      
                                                // Execute the query and store the result set
                                                $result = mysqli_query($conn, $query);
                                                  
                                                if ($result)
                                                {
                                                $row = mysqli_num_rows($result);
                                                if ($row)
                                                    {
                                                ?>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $row; ?>">0</span>
                                                </h4>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+ 2.8</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Volunteers</span>
                                                <?php
                                                $query = "SELECT * FROM member_list";
      
                                                // Execute the query and store the result set
                                                $result = mysqli_query($conn, $query);
                                                  
                                                if ($result)
                                                {
                                                $row = mysqli_num_rows($result);
                                                if ($row)
                                                    {
                                                ?>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $row; ?>">0</span>
                                                </h4>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+3</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Contact Inquiry</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Contact Inquiry List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Contact Id</th>
                                                <th>Contact Name</th>
                                                <th>Contact Email</th>
                                                <th>Contact Number</th>
                                                <th>Contact Subject</th>
                                                <th>Contact Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                        <?php
                                        include'config.php';
                                        $view_inquiry = "select * from contact_inquiry";
                                        $run_query = mysqli_query($conn, $view_inquiry);
                                        if($run_query-> num_rows > 0){
                                            
                                            while($row = mysqli_fetch_assoc($run_query)) { 
                                                $c_id = $row['c_id'];
                                                $c_name = $row['c_name'];
                                                $c_email = $row['c_email'];
                                                $c_phone = $row['c_phone'];
                                                $c_subject = $row['c_subject'];
                                                $c_massage = $row['c_massage'];
                                                
                                            
                                                    echo "<tr data-id='1'>
                                                        <td data-field='contact_id' style='width: 80px'> ".$c_id.".
                                                        </td>
                                                        <td data-field='contact_title' class='contact_title'>".$c_name."
                                                        </td>
                                                        <td data-field='contact_content' class='contact_content'>
                                                            <p>".$c_email."</p>
                                                        </td>
                                                        <td data-field='contact_content' class='contact_content'>
                                                            <p>".$c_phone."</p>
                                                        </td>
                                                        <td data-field='contact_content' class='contact_content'>
                                                            <p>".$c_subject."</p>
                                                        </td>
                                                        <td data-field='contact_content' class='contact_content'>
                                                            <p>".$c_massage."</p>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href='edit-inquiry.php?id=$c_id' class='btn btn-outline-secondary btn-sm edit' title='Edit'>
                                                                <i class='fas fa-pencil-alt'></i>
                                                            </a>
                                                            <a href='delete-inquiry.php?id=$c_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
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
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

    <?php include'right-sidebar.php'; ?>

    <?php include'script.php'; ?>

</body>

</html>