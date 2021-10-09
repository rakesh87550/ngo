<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Add Team Member | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Team Member</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Team Member</li>
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
                                        <h4 class="card-title">Add Team Member</h4>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Name:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="member_name" placeholder="Member Name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="member_title" placeholder="Member Title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Image:</label>
                                                        <input class="form-control" type="file"  id="example-img-input" name="member_img" placeholder="Member Image">
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="add_member" class="btn btn-primary w-md">Upload Banner</button>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>

    <?php include'right-sidebar.php'; ?>

    <?php include'script.php'; ?>

</body>
</html>

<?php
if (isset($_POST['add_member'])) {

$member_name = $_POST['member_name'];
$member_title = $_POST['member_title'];

$uploaddir = 'team-images';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $member_img = $_FILES['member_img']['name'];
    $tmp_member = $_FILES['member_img']['tmp_name'];
    $member_path = $uploaddir ."/". $member_img;

    if(move_uploaded_file($tmp_member, $member_path)){

        $insert_member = "insert into member_list(member_id, member_name, member_title, member_img) values('', '$member_name', '$member_title', '$member_img')";
        $run_query = mysqli_query($conn, $insert_member);

        if ($run_query){
            echo '<script>alert("Member data uploaded.")</script>';
        }
        else{
            echo '<script>alert("Member data not uploaded.")</script>';
        }
    }
    else{
        echo '<script>alert("Member not uploaded.")</script>';
    }
}
?>    