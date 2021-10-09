<?php
include'config.php';

$view_news = "SELECT * FROM news WHERE news_id='" . $_GET["id"] . "'";
$run_query = mysqli_query($conn, $view_news);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Edit News | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Edit News</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Edit News</li>
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
                                        <h4 class="card-title">Edit News</h4>
                                    </div>
                                    <div class="card-body editable_banner p-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php while($row = mysqli_fetch_array($run_query)) { 
                                                $n_id = $row['news_id'];
                                                $n_title = $row['news_title'];
                                                $n_date = $row['news_date'];
                                                $n_place = $row['news_place'];
                                                $n_content = $row['news_content'];
                                                $n_img = $row['news_img'];
                                            }
                                                ?>

                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="n_title" placeholder="News Title" value="<?php echo $n_title ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Date:</label>
                                                        <input class="form-control" type="date"  id="example-text-input" name="n_date" placeholder="News Date" value="<?php echo $n_date ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Place:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="n_place" placeholder="News Place" value="<?php echo $n_place ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Image:</label>
                                                        <img class="editable_img" id="output" src="news-images/<?php echo $n_img ?>">
                                                        <input class="form-control" type="file"  id="example-img-input" name="n_img" placeholder="News Image" onchange="loadFile(event)">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">News Message:</label>
                                                        <textarea class="form-control" rows="4" type="text"  id="example-msg-input" name="n_content" placeholder="News Message"><?php echo $n_content ?></textarea>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="submit" class="btn btn-primary w-md">Edit News</button>
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
$n_content = $_POST['n_content'];

$uploaddir = 'news-images';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $n_img = $_FILES['n_img']['name'];
    $n_tmp = $_FILES['n_img']['tmp_name'];
    $n_path = $uploaddir ."/". $n_img;

    if(move_uploaded_file($n_tmp, $n_path)){

        $update_event = "UPDATE `news` SET `news_title`='$n_title',`news_date`='$n_date',`news_place`='$n_place',`news_content`='$n_content',`news_img`='$n_img' WHERE `news_id` = '$n_id'";
        $run_query = mysqli_query($conn, $update_event);

        if ($run_query){
            echo '<script>alert("News data edited.")</script>';
            echo '<script> window.location.href = "news-list.php";</script>';
        }
        else{
            echo '<script>alert("News data not edited.")</script>';
        }
    }
    else{
        echo '<script>alert("News not edited.")</script>';
    }
}
?>    