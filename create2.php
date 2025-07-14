<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nama = $_POST['nama_guru'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tgl = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $mapel = $_POST['mapel'];

    $sql = "INSERT INTO data_guru (nama_guru,jenis_kelamin,alamat,tanggal_lahir,email,telepon,mapel)
    VALUES ('$nama','$jk','$alamat','$tgl','$email','$telp','$mapel')";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah siswa</title>
</head>
<body>
    <h2>Tambah Guru</h2>
    <form action="" method="post">
        <label for="">nama_guru :</label><br>
        <input type="text" name="nama_guru" required><br>
        jenis kelamin :
        <select name="jenis_kelamin" id="">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select><br>
        <label for=""> alamat:</label><br>
        <input type="text" name="alamat" required><br>
        <label for="">tanggal lahir :</label><br>
        <input type="date" name="tanggal_lahir" id=""><br>
        <label for="">email :</label><br>
        <input type="text" name="email" required><br>
        <label for="">telepon :</label><br>
        <input type="text" name="telepon" id=""><br>
        <label for="">mapel :</label><br>
        <input type="text" name="mapel" id=""><br>
        <input type="submit" value="tambah"><br>
    </form>
    <a href="index2.php">kembali</a>
</body>
</html>