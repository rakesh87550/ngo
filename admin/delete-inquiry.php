<?php
include'config.php';

$detele_data = "DELETE FROM contact_inquiry WHERE c_id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $detele_data)) {
    echo '<script>alert("Inquiry data deleted.")</script>';
    echo '<script> window.location.href = "inquiry-list.php";</script>';
}
else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>