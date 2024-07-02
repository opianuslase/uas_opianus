<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UEFA 2024 Klasemen</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <h2>Input Data Klasemen</h2>
    <form action="insert.php" method="POST">
        <label for="group_name">Nama Group:</label>
        <select id="group_name" name="group_name" required>
            <option value="A">Group A</option>
            <option value="B">Group B</option>
            <option value="C">Group C</option>
            <option value="D">Group D</option>
        </select><br><br>
        <label for="country_name">Nama Negara:</label>
        <select id="country_name" name="country_name" required>
            <option value="spanyol">spanyol</option>
            <option value="italia">italia</option>
            <option value="kroasia">kroasia</option>
            <option value="albania">albania</option>
            <!-- Tambahkan negara-negara UEFA lainnya sesuai kebutuhan -->
        </select><br><br>
        <label for="wins">Jumlah Menang:</label>
        <input type="number" id="wins" name="wins" min="0" required><br><br>
        <label for="draws">Jumlah Seri:</label>
        <input type="number" id="draws" name="draws" min="0" required><br><br>
        <label for="losses">Jumlah Kalah:</label>
        <input type="number" id="losses" name="losses" min="0" required><br><br>
        <label for="points">Jumlah Poin:</label>
        <input type="number" id="points" name="points" min="0" required><br><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
