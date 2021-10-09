<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Add Gallery Video | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Gallery Video</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Gallery Video</li>
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
                                        <h4 class="card-title">Add Video</h4>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Video Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="video_title" placeholder="Video Title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Gallery Video:</label>
                                                        <input class="form-control" type="file" id="example-img-input" name="video_location" placeholder="Gallery Video">
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="upload_video" class="btn btn-primary w-md">Upload Video</button>
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
if (isset($_POST['upload_video'])){

$video_title = $_POST['video_title'];

$gallerydir = 'videos-gallery';
    if(!is_dir($gallerydir)){
        mkdir($gallerydir);
    }

    $video_location = $_FILES['video_location']['name'];
    $tmp_video = $_FILES['video_location']['tmp_name'];
    $video_path = $gallerydir ."/". $video_location;

    if(move_uploaded_file($tmp_video, $video_path)){

        $insert_gallery = "insert into video_gallery(video_id, video_title, video_location) values('', '$video_title', '$video_location')";
        $run_query = mysqli_query($conn, $insert_gallery);

        if ($run_query){
            echo '<script>alert("Video uploaded in Gallery.")</script>';
        }
        else{
            echo '<script>alert("Video not uploaded in Gallery.")</script>';
        }
    }
    else{
        echo '<script>alert("Video not uploaded.")</script>';
    }

}


?>    