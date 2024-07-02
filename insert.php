<?php
// insert.php

// Koneksi ke database MySQL
$servername = "localhost"; // Ganti sesuai dengan host Anda
$username = "root"; // Ganti sesuai dengan username database Anda
$password = ""; // Ganti sesuai dengan password database Anda
$dbname = "db_uas"; // Ganti sesuai dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari form input klasemen
$group_name = $_POST['group_name'];
$country_name = $_POST['country_name'];
$wins = $_POST['wins'];
$draws = $_POST['draws'];
$losses = $_POST['losses'];
$points = $_POST['points'];

// Query untuk memasukkan data ke dalam tabel klasemen_uefa
$sql = "INSERT INTO klasemen_uefa (group_name, country_name, wins, draws, losses, points)
        VALUES ('$group_name', '$country_name', $wins, $draws, $losses, $points)";

if ($conn->query($sql) === TRUE) {
    echo "Data klasemen berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
