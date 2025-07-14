<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "INSERT INTO data_siswa (nama,email,telepon,alamat,tanggal_lahir)
    VALUES ('$nama', '$email', '$telepon', '$alamat', '$tanggal_lahir')";

if ($conn->query($sql) === TRUE) {
    header('location: index.php');
} else {
    echo "error: ". $sql . "<br>" . $conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <form action="" method="post">
        <label for="">nama :</label><br>
        <input type="text" name="nama" required><br>
        <label for="">email :</label><br>
        <input type="text" name="email" required><br>
        <label for="">telepon :</label><br>
        <input type="text" name="telepon" required><br>
        <label for="">alamat :</label><br>
        <input type="text" name="alamat" required><br>
        <label for="">tanggal lahir :</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>
        <input type="submit" value="tambah">
    </form>
    <a href="index.php">kembali</a>
</body>
</html>