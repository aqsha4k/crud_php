<?php
include 'database.php';

$result = $conn->query("SELECT * FROM data_guru");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><b>Data Guru</b></h2>
    <a href="create2.php">tambah guru</a>
    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
        <th>ID</th>
        <th>nama_guru</th>
        <th>jenis_kelamin</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        <th>email</th>
        <th>telepon</th>
        <th>mapel</th>
        <th>aksi</th>
        </tr>

        <?php while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama_guru']; ?></td>
            <td><?= $row['jenis_kelamin']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['telepon']; ?></td>
            <td><?= $row['mapel']; ?></td>
            <td>
                <a href="edit2.php?id=<?= $row['id']; ?>">edit</a> |
                <a href="delete2.php?id=<?= $row['id'];?>" onclick="return confirm('yakin ingin menghapus?'">delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">kembali ke data siswa</a>

</body>
</html>