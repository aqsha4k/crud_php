<?php
include 'database.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM data_guru WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nama = $_POST['nama_guru'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $mapel = $_POST['mapel'];

    $sql = "UPDATE data_guru SET
            nama_guru='$nama',
            jenis_kelamin='$jk',
            alamat='$alamat',
            tanggal_lahir='$tgl',
            email='$email',
            telepon='$telp',
            mapel='$mapel'
            Where id=$id";

if ($conn->query($sql) === TRUE) {
    header('location: index2.php');
} else {
    echo "error: ". $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Guru</title>
</head>
<body>
    <h2>Edit Guru</h2>
    <form action="" method="post">
        <label for="">nama_guru :</label><br>
        <input type="text" name="nama_guru" value="<?= $row['nama_guru']; ?>" required><br>
        <label for="">jenis kelamin : </label>
        <select name="jenis_kelamin" id="">
            <option value="laki-laki" <?= $row['jenis_kelamin']; ?>>Laki-laki</option>
            <option value="perempuan" <?= $row['jenis_kelamin']; ?>>perempuan</option>
        </select><br>
        <label for=""> alamat:</label><br>
        <input type="text" name="alamat" value="<?= $row['alamat']; ?>" required><br>
        <label for="">tanggal lahir :</label><br>
        <input type="date" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>" id=""><br>
        <label for="">email :</label><br>
        <input type="text" name="email" value="<?= $row['email']; ?>" required><br>
        <label for="">telepon :</label><br>
        <input type="text" name="telepon" value="<?= $row['telepon']; ?>" id="" required><br>
        <label for="">mapel :</label><br>
        <input type="text" name="mapel" value="<?= $row['mapel']; ?>" id="" required><br>
        <input type="submit" value="update">
    </form>
    <a href="index2.php">Kembali</a>
</body>
</html>