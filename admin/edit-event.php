<?php
include'config.php';

$view_events = "select * from event_list";
$run_query = mysqli_query($conn, $view_events);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Edit Events | NGO - We For You Organization</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Edit Event</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                            <li class="breadcrumb-item active">Edit Event</li>
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
                                        <h4 class="card-title">Edit Event</h4>
                                    </div>
                                    <div class="card-body editable_banner p-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php while($row = mysqli_fetch_array($run_query)) { 
                                                $e_id = $row['event_id'];
                                                $e_title = $row['event_title'];
                                                $e_date = $row['event_date'];
                                                $e_place = $row['event_place'];
                                                $e_content = $row['event_content'];
                                                $e_img = $row['event_img'];
                                            }
                                                ?>

                                                <form action="" method="POST" enctype="multipart/form-data" >
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Event Title:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="e_title" placeholder="Event Title" value="<?php echo $e_title ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Event Date:</label>
                                                        <input class="form-control" type="date"  id="example-text-input" name="e_date" placeholder="Event Date" value="<?php echo $e_date ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Event Place:</label>
                                                        <input class="form-control" type="text"  id="example-text-input" name="e_place" placeholder="Event Place" value="<?php echo $e_place ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Event Image:</label>
                                                        <img class="editable_img" id="output" src="evnts/<?php echo $e_img ?>">
                                                        <input class="form-control" type="file"  id="example-img-input" name="e_img" placeholder="Event Image" onchange="loadFile(event)">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Event Message:</label>
                                                        <textarea class="form-control" rows="4" type="text"  id="example-msg-input" name="e_content" placeholder="Event Message"><?php echo $e_content ?></textarea>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button type="submit" name="submit" class="btn btn-primary w-md">Edit Event</button>
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

$e_title = $_POST['e_title'];
$e_date = $_POST['e_date'];
$e_place = $_POST['e_place'];
$e_content = $_POST['e_content'];

$uploaddir = 'events';
    if(!is_dir($uploaddir)){
        mkdir($uploaddir);
    }

    $e_img = $_FILES['e_img']['name'];
    $e_tmp = $_FILES['e_img']['tmp_name'];
    $e_path = $uploaddir ."/". $e_img;

    if(move_uploaded_file($e_tmp, $e_path)){

        $update_event = "UPDATE `event_list` SET `event_title`='$e_title',`event_date`='$e_date',`event_place`='$e_place',`event_content`='$e_content',`event_img`='$e_img' WHERE `event_id` = '$e_id'";
        $run_query = mysqli_query($conn, $update_event);

        if ($run_query){
            echo '<script>alert("Event data edited.")</script>';
            echo '<script> window.location.href = "event-list.php";</script>';
        }
        else{
            echo '<script>alert("Event data not edited.")</script>';
        }
    }
    else{
        echo '<script>alert("Event not edited.")</script>';
    }

}
?>    