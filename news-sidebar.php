                    <div class="news_portal latest_div">
                        <h4>Latest News</h4>
<?php
$view_news = "SELECT * FROM news WHERE news_type = 'latest'";
$run_query = mysqli_query($conn, $view_news);
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>
                        <div class="Latest_headlines">
                            <h5><a href="news-details.php?id=<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h5>
                        </div>
<?php
}
}
?>
                    </div>
                    <div class="news_portal most_div">
                        <h4>Most Popular News</h4>
<?php
$view_news = "SELECT * FROM news WHERE news_type = 'popular'";
$run_query = mysqli_query($conn, $view_news);
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) {
?>
                        <div class="Latest_headlines">
                            <h5><a href="news-details.php?id=<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h5>
                        </div>
<?php
}
}
?>
                    </div>