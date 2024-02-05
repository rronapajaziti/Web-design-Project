<?php 
    include '../config_rezervo.php';
    $rezervimi = new DatabaseRezervo();
    $id = $_REQUEST['id'];
    $delete = $rezervimi->delete($id);
    if ($delete) {
        echo "<script>alert('The Reservation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'reservationDashboard.php';</script>";
    }
?>