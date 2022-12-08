<?php 
session_start(); 
// error_reporting(0); 
 
include "koneksi.php"; 
$nama = $_POST['nama']; 
$telpon = $_POST['telpon']; 
$username = $_POST['username']; 
$password = $_POST['password']; 
 
$kirim = $_POST['submit']; 
 
$query = "SELECT * FROM tbl_akun WHERE username = '$username'"; 
$hasil = mysqli_query($koneksi_db, $query); 
$data = mysqli_fetch_assoc($hasil); 
 
if(isset($kirim)){ 
    if($password == $data['password'] && $username == $data['username']){ 
        $_SESSION['level'] = $data['Level']; 
        $_SESSION['username'] = $data['username']; 
        echo "<script>alert('login berhasil')</script>"; 
        header('location: admin.php'); 
     exit; 
    } else { 
     echo "<script>alert('login gagal')</script>"; 
        header("location:index.php"); 
        exit; 
    } 
} 
?>