<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_tes';

$conn = new mysqli($host,$user,$password,$dbname);

if ($conn->connect_error) {
    die("koneksi gagal : ".$conn->connect_error);
}
?>