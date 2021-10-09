<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Add News | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Add News</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Add News</li>
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
                                        <h4 class="card-title">Add News</h4>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="n_title" placeholder="News Title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Date:</label>
                                                        <input class="form-control" type="date"  id="example-text-input" name="n_date" placeholder="News Date">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Place:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="n_place" placeholder="News Place">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Type:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="n_type" placeholder="News Type">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Image:</label>
                                                        <input class="form-control" type="file"  id="example-img-input" name="n_img" placeholder="News Image">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Content:</label>
                                                        <textarea class="form-control" rows="8" type="text"  id="example-msg-input" name="n_content" placeholder="News Content"></textarea>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="submit" class="btn btn-primary w-md">Upload News</button>
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

$n_title = $_POST['n_title'];
$n_date = $_POST['n_date'];
$n_place = $_POST['n_place'];
$n_type = $_POST['n_type'];
$n_img = $_POST['n_img'];
$n_content = $_POST['n_content'];

$uploaddir = 'news-images';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $n_img = $_FILES['n_img']['name'];
    $n_tmp = $_FILES['n_img']['tmp_name'];
    $n_path = $uploaddir ."/". $n_img;

    if(move_uploaded_file($n_tmp, $n_path)){

        $insert_news = "insert into news(news_id, news_title, news_date, news_place, news_type, news_content, news_img) values('', '$n_title', '$n_date', '$n_place', '$n_type', '$n_content', '$n_img')";
        $run_query = mysqli_query($conn, $insert_news);

        if ($run_query){
            echo '<script>alert("News data uploaded.")</script>';
            echo '<script> window.location.href = "news-list.php";</script>';
        }
        else{
            echo '<script>alert("News data not uploaded.")</script>';
        }
    }
    else{
        echo '<script>alert("News not uploaded.")</script>';
    }

}


?>    