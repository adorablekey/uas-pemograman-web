<?php include '../config/koneksi.php'; ?>
<h2>Register</h2>
<form method="POST" action="register_proses.php">
Nama:<br>
<input type="text" name="nama" required><br><br>
Email:<br>
<input type="email" name="email" required><br><br>
Password:<br>
<input type="password" name="password" required><br><br>
Role:<br>
<select name="role">
<option value="customer">Customer</option>
<option value="admin">Admin</option>
</select><br><br>
<button type="submit">Register</button>
</form>