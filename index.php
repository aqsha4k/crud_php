<?php
include 'database.php';

$result = $conn->query("SELECT * FROM data_siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="create.php">tambah siswa</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>nama</th>
            <th>email</th>
            <th>telepon</th>
            <th>alamat</th>
            <th>tanggal lahir</th>
            <th>aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['telepon']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">edit</a> |
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin ingin menghapus?'">hapus</a>
            </td>
        </tr>
        <?php 
        endwhile
        ?>
    </table>
    <br>
    <a href="index2.php">Data Guru</a>
</body>
</html>