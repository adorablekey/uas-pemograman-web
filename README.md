# uas-pemograman-web
# NAMA  : KEYSIA NURHAYATI BR PANJAITAN
# KELAS : TI 24 A4
# NIM   : 312410350

# sistem informasi bengkel motor

# Deskripsi Proyek
​Aplikasi Bengkel Motor adalah platform manajemen sederhana yang dirancang menggunakan arsitektur MVC (Model-View-Controller) dengan PHP native. Aplikasi ini mendukung pengelolaan data sparepart, layanan servis, dan sistem login berbasis peran (role-based access control).

# fitur yang digunakan
# php (Native/OOP)
# MySQL
# Apache
# html5 & CSS3

# Fitur yang digunakan 
# Login
# user panel booking
# logout

# struktur folder project

      BENGKEL_MOTOR/
      ├── app/                      
      │   ├── config/
      │   │   └── koneksi.php       # Pindahkan dari folder config lama
      │   ├── controllers/          # Logika login, booking, dsb
      │   ├── models/               # Query database
      │   └── views/                # Pindahkan file dashboard, login ke sini
      ├── public/                   # Folder yang bisa diakses publik
      │   ├── assets/               # CSS, JS, Gambar
      │   │   └── style.css
      │   ├── .htaccess             # File routing (SANGAT PENTING)
      │   └── index.php             # Entry point utama aplikasi
      └── .htaccess                 # Opsional: untuk mengarahkan root ke /public


# cara menjalakan aplikasinya

        1.Install XAMPP dan jalankan Apache & MySQL
        2.Clone atau download repository project
        3.Letakkan folder project ke dalam direktori htdocs
        4.Buat database dengan nama db_booking
        5.Import file database.sql ke database
        6.Akses aplikasi melalui browser: http://localhost/booking_system/user_dashboard.php

# akun login

        username : key
        Password: 123



