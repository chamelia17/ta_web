<?php 
session_start(); 
// error_reporting(0); 
 
include "koneksi.php"; 
$username = $_POST['nama']; 
$pass = $_POST['password']; 
 
$kirim = $_POST['submit']; 
 
$query = "SELECT * FROM tb_user WHERE Username = '$username'"; 
$hasil = mysqli_query($koneksi_db, $query); 
$data = mysqli_fetch_assoc($hasil); 
 
if(isset($kirim)){ 
    if($pass == $data['Password'] && $username == $data['Username']){ 
        $_SESSION['level'] = $data['Level']; 
        $_SESSION['username'] = $data['Username']; 
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