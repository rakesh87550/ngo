<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Add Gallery Images | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add Gallery Images</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Gallery Images</li>
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
                                        <h4 class="card-title">Add Images</h4>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Image Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="gallery_title" placeholder="Image Title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Gallery Image:</label>
                                                        <input class="form-control" type="file"  id="example-img-input" name="gallery_img" placeholder="Gallery Image">
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="submit" class="btn btn-primary w-md">Upload Banner</button>
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
if (isset($_POST['submit'])) {

$gallery_title = $_POST['gallery_title'];

$uploaddir = 'images-gallery';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $gallery_img = $_FILES['gallery_img']['name'];
    $tmp_gallery = $_FILES['gallery_img']['tmp_name'];
    $gallery_path = $uploaddir ."/". $gallery_img;

    if(move_uploaded_file($tmp_gallery, $gallery_path)){

        $insert_gallery = "insert into image-gallery(gallery_id, gallery_title, gallery_img) values('', '$gallery_title', '$gallery_img')";
        $run_query = mysqli_query($conn, $insert_gallery);

        if ($run_query){
            echo '<script>alert("Image uploaded in Gallery.")</script>';
        }
        else{
            echo '<script>alert("Image not uploaded in Gallery.")</script>';
        }
    }
    else{
        echo '<script>alert("Image not uploaded.")</script>';
    }

}


?>    