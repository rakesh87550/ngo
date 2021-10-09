<?php
include'config.php';

$detele_banner = "DELETE FROM banner_slider WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_banner)) {
    echo '<script>alert("Banner data deleted.")</script>';
    echo '<script> window.location.href = "banner-list.php";</script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>