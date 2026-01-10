<?php
include "../config/koneksi.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../auth/login.php");
    exit;
}

$id = $_GET['id'];
$status = $_GET['status'];

mysqli_query($conn,"UPDATE booking SET status='$status' WHERE booking_id='$id'");

header("Location: kelola_booking.php");
