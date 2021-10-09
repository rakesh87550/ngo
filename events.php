<?php
include'config.php';
$view_events = "select * from event_list";
$run_query = mysqli_query($conn, $view_events);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Events | We for You Organisation</title>
<?php include'style.php'; ?>
</head>

<body>
<?php include'header.php'; ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Events</h2>
                        <ul>
                            <li><a href="./">Home</a>
                            </li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="event-sec pt-50 pb-50">
        <div class="container">

<?php
if($run_query-> num_rows > 0){

while($row = mysqli_fetch_assoc($run_query)) { 
$e_id = $row['event_id'];
?>                                                                                       
            <div class="event_div">
                <div class="row">
                    <div class="col-lg-5 col-sm-5 col-xs-12">
                        <div class="event_img">
                            <img src="admin/events/<?php echo $row['event_img']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="event_content">
                            <h3><?php echo $row['event_title']; ?></h3>
                            <span>Mathabhanga, June 19 4:PM</span>
                            <p><?php echo $row['event_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
}
?>
        </div>
    </section>


<?php include'footer.php'; ?>


</body>

</html>