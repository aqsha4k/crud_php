<?php
include 'database.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM data_siswa WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $sql = "UPDATE data_siswa SET
            nama='$nama',
            email='$email',
            telepon='$telepon',
            alamat='$alamat',
            tanggal_lahir='$tanggal_lahir'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Siswa</h2>
    <form action="" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $row['email']; ?>" required><br>
        <label>Telepon:</label><br>
        <input type="text" name="telepon" value="<?= $row['telepon']; ?>" required><br>
        <label>Alamat:</label><br>
        <textarea name="alamat" required><?= $row['alamat']; ?></textarea><br>
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>