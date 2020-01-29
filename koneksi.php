<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_sistempakar';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>