<?php
// view.php

// Koneksi ke database MySQL
$servername = "localhost"; // Ganti dengan host MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "db_uas"; // Ganti dengan nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel klasemen_uefa
$sql = "SELECT * FROM klasemen_uefa";
$result = $conn->query($sql);

// Menampilkan data jika ada
if ($result->num_rows > 0) {
    echo "<h2>Data Klasemen UEFA</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Group Name</th><th>Country Name</th><th>Wins</th><th>Draws</th><th>Losses</th><th>Points</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["group_name"]."</td>";
        echo "<td>".$row["country_name"]."</td>";
        echo "<td>".$row["wins"]."</td>";
        echo "<td>".$row["draws"]."</td>";
        echo "<td>".$row["losses"]."</td>";
        echo "<td>".$row["points"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data klasemen yang tersedia.";
}

// Menutup koneksi database
$conn->close();
?>
