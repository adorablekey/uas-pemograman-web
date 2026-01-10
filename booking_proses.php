<?php
include '../config/koneksi.php';


$user = $_POST['user_id'];
$motor = $_POST['motor_id'];
$layanan = $_POST['layanan_id'];
$tgl = $_POST['tanggal'];
$jam = $_POST['jam'];
$keluhan = $_POST['keluhan'];


mysqli_query($conn,"INSERT INTO booking VALUES(NULL,'$user','$layanan','$motor','$tgl','$jam','$keluhan','pending')");


echo "Booking berhasil";
?>