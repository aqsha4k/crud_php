<?php
include 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM data_guru WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('location: index2.php');
} else {
    echo "error: ". $sql . "<br>" . $conn->error;
}

?>