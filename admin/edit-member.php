<?php
include'config.php';

$view_member = "SELECT * FROM member_list WHERE member_id ='" . $_GET["id"] . "'";
$run_query = mysqli_query($conn, $view_member);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Edit Team Member | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Edit Team Member</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Edit Team Member</li>
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
                                        <h4 class="card-title">Edit Team Member</h4>
                                    </div>
                                    <div class="card-body editable_banner p-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php while($row = mysqli_fetch_array($run_query)) { 
                                                $member_id = $row['member_id'];
                                                $member_name = $row['member_name'];
                                                $member_title = $row['member_title'];
                                                $member_img = $row['member_img'];
                                            }
                                                ?>

                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Name:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="member_name" placeholder="Member Name" value="<?php echo $member_name ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="member_title" placeholder="Member Title" value="<?php echo $member_title ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Member Image:</label>
                                                        <img class="editable_img" id="output" src="banner/<?php echo $member_img ?>">
                                                        <input class="form-control" type="file"  id="example-img-input" name="member_img" placeholder="Member Image" onchange="loadFile(event)">
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="edit_member" class="btn btn-primary w-md">Edit Banner</button>
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
if (isset($_POST['edit_member'])) {

$member_title = $_POST['member_title'];
$member_name = $_POST['member_name'];

$uploaddir = 'team-images';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $member_img = $_FILES['member_img']['name'];
    $tmp_member = $_FILES['member_img']['tmp_name'];
    $member_path = $uploaddir ."/". $member_img;

    if(move_uploaded_file($tmp_member, $member_path)){

        $update_member = "UPDATE `member_list` SET`member_name`='$member_name', `member_title`='$member_title',`member_img`='$member_img' WHERE `member_id` = '$member_id'";
        $run_query = mysqli_query($conn, $update_member);

        if ($run_query){
            echo '<script>alert("Member data edited.")</script>';
    echo '<script> window.location.href = "member-list.php";</script>';
        }
        else{
            echo '<script>alert("Member data not edited.")</script>';
        }
    }
    else{
        echo '<script>alert("Member not edited.")</script>';
    }

}
?>    