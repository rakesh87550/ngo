<?php
include'config.php';
$view_news = "select * from news";
$run_query = mysqli_query($conn, $view_news);
?>
<!doctype html>
<html lang="en">
<head>
    <title>News | We for You Organisation</title>
<?php include'style.php'; ?>
</head>

<body>
<?php include'header.php'; ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>News</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-sec pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9 col-xs-12">
                    <div class="clearfix"></div>
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) { 
$n_img = $row['news_img'];
?>                        
                                            
                    <div class="news_div">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 col-xs-12">
                                <div class="news_img">
                                    <img src="admin/news-images/<?php echo $row['news_img']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="news_content">
                                    <h3><?php echo $row['news_title']; ?></h3>
                                    <span><?php echo $row['news_place']; ?>, <?php echo $row['news_date']; ?></span>
                                    <p><?php echo $row['news_content']; ?></p>
                                    <a href="news-details.php?id=<?php echo $row['news_id']; ?>">read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
}
}
?>
                </div>
                <div class="col-lg-4 col-sm-3 col-xs-12">
                    <?php include'news-sidebar.php'; ?>
                </div>
            </div>
                    
        </div>
    </section>


<?php include'footer.php'; ?>


</body>

</html>