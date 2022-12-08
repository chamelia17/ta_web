<?php
// koneksi php ke mysql
$host = "localhost";
$username = "root";
$password = "";
$db = "pts_db";
// menghubungkan php dengan database
$koneksi_db = mysqli_connect($host, $username, $password, $db) or die(mysqli_error($koneksi));
?>