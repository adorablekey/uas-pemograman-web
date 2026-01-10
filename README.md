# uas-pemograman-web
# NAMA  : KEYSIA NURHAYATI BR PANJAITAN
# KELAS : TI 24 A4
# NIM   : 312410350

# sistem informasi bengkel motor

# Deskripsi Proyek
​Aplikasi Bengkel Motor adalah platform manajemen sederhana yang dirancang menggunakan arsitektur MVC (Model-View-Controller) dengan PHP native. Aplikasi ini mendukung pengelolaan data sparepart, layanan servis, dan sistem login berbasis peran (role-based access control).

# fitur yang digunakan
      php (Native/OOP)
      MySQL
      Apache
      html5 & CSS3

# Fitur yang digunakan 
      Login
      user panel booking
      logout

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

# pembuatan database

pembuatan database dan tabel di phpMyAdmin.
<img width="1920" height="1200" alt="Screenshot 2026-01-10 203327" src="https://github.com/user-attachments/assets/a2b75878-73c6-41e2-8c0e-74a6c14e8c6e" />

# Folder Project
<img width="241" height="739" alt="Screenshot 2026-01-10 203605" src="https://github.com/user-attachments/assets/e0d8ce9d-640c-4d63-a645-af583f30a414" />

# Implementasi Routing (.htaccess)
<img width="562" height="180" alt="Screenshot 2026-01-10 203825" src="https://github.com/user-attachments/assets/667ee7f8-0cab-4d16-bbd6-e798ff07eb6a" />

# Halaman login
<img width="1920" height="1200" alt="Screenshot 2026-01-10 161258" src="https://github.com/user-attachments/assets/70f869fe-f580-4147-b293-efe39977fbcf" />

# masukan username dan passwordnya
username : key
password : 123
<img width="1920" height="1200" alt="Screenshot 2026-01-10 205018" src="https://github.com/user-attachments/assets/3496a659-8101-4db0-9814-0ecb1b771332" />

# user panel _ booking
<img width="1920" height="1200" alt="Screenshot 2026-01-10 204231" src="https://github.com/user-attachments/assets/46471de7-bd8a-42e2-862b-d563b3e6ef68" />

# catatan
Proyek ini memenuhi seluruh standar kompetensi pemrograman web yang diminta, yaitu penguasaan database (MySQL), logika pemrograman (PHP), keamanan akses (Login Role), dan pengalaman pengguna (Responsive Design)
