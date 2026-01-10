<?php
include "../config/koneksi.php";

// keamanan: hanya admin
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../auth/login.php");
    exit;
}

// ambil semua data booking
$data = mysqli_query($conn,"
    SELECT booking.*, 
           users.nama, 
           layanan.nama_layanan
    FROM booking
    JOIN users ON booking.user_id = users.user_id
    JOIN layanan ON booking.layanan_id = layanan.layanan_id
    ORDER BY booking.tanggal DESC
");
?>

<h2>Kelola Booking Bengkel</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Layanan</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Keluhan</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

<?php 
$no = 1;
while ($d = mysqli_fetch_assoc($data)) { 
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama'] ?></td>
        <td><?= $d['nama_layanan'] ?></td>
        <td><?= $d['tanggal'] ?></td>
        <td><?= $d['jam'] ?></td>
        <td><?= $d['keluhan'] ?></td>
        <td><?= $d['status'] ?></td>
        <td>
            <a href="update_status.php?id=<?= $d['booking_id'] ?>&status=proses">Proses</a> |
            <a href="update_status.php?id=<?= $d['booking_id'] ?>&status=selesai">Selesai</a> |
            <a href="update_status.php?id=<?= $d['booking_id'] ?>&status=batal">Batal</a>
        </td>
    </tr>
<?php } ?>
</table>

<br>
<a href="dashboard.php">Kembali ke Dashboard</a> |
<a href="../auth/logout.php">Logout</a>
