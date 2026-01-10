<?php
include "../config/koneksi.php";
?>

<form method="POST" action="booking_proses.php">
    <h2>Booking Servis</h2>

    Tanggal:
    <input type="date" name="tanggal" required><br>

    Jam:
    <input type="time" name="jam" required><br>

    Keluhan:
    <textarea name="keluhan"></textarea><br>

    <button name="booking">Booking</button>
</form>
