<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM data_siswa WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('location: index.php');
} else {
    echo "error: ". $sql . "<br>" . $conn->error;
}

?>