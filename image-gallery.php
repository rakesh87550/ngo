<?php
include'config.php';
$view_gallery = "select * from image_gallery";
$run_query = mysqli_query($conn, $view_gallery);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Image Gallery | We For You Organization</title>
    <?php include'style.php'; ?>
</head>

<body>
    <?php include'header.php'; ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Photos Gallery</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li>Photos Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-area pt-50 pb-50">
        <div class="section-title">
            <h2>Photos Gallery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="container">
            <div class="row">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-gallery-box">
                        <img src="admin/images-gallery/<?php echo $row['gallery_img']; ?>" alt="<?php echo $row['gallery_title']; ?>">
                        <a href="admin/images-gallery/<?php echo $row['gallery_img']; ?>" class="gallery-btn" data-imagelightbox="popup-btn"> <i class="flaticon-search"></i></a>
                        <div class="gallery_imgTitle">
                            <h4><?php echo $row['gallery_title']; ?></h4>
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