<?php
include'config.php';
$view_data = "select * from video_gallery";
$run_query = mysqli_query($conn, $view_data);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Video Gallery | We For You Organization</title>
    <?php include'style.php'; ?>
</head>

<body>
    <?php include'header.php'; ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Video Gallery</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li>Video Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-area pt-50 pb-50">
        <div class="section-title">
            <h2>Video Gallery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="container">
            <div class="row">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) { 
?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="video-gallery-box">
                        <video width="100%" controls>
                            <source src="admin/videos-gallery/<?php echo $row['video_location']; ?>" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                        <div class="gallery_imgTitle">
                            <h4><?php echo $row['video_title']; ?></h4>
                        </div>
                    </div>
                </div>
<?php 
}
}
?>
            </div>
        </div>
    </div>

<?php include'footer.php'; ?>
</body>

</html>