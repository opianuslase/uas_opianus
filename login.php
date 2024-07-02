<?php
// login.php

// Simpan informasi login (ganti dengan informasi sesuai dengan kebutuhan Anda)
$valid_nim = "1234567890";
$valid_password = "password123";

// Ambil data dari form login
$nim = $_POST['nim'];
$password = $_POST['password'];

// Verifikasi login
if ($nim === $valid_nim && $password === $valid_password) {
    // Jika login berhasil, arahkan ke halaman input klasemen
    header("Location: index.html"); // Ganti sesuai dengan nama file form klasemen Anda
    exit();
} else {
    // Jika login gagal, arahkan kembali ke halaman login
    header("Location: index.html");
    exit();
}
?>
