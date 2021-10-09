<?php
include'config.php';

$detele_gallery = "DELETE FROM image_gallery WHERE gallery_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_gallery)) {
    echo '<script>alert("Gallery data deleted.")</script>';
    echo '<script> window.location.href = "image-gallery.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>