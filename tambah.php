<div class="halaman" style="padding: 10px;">
    <h2>Tambah data</h2>
    <style>td {padding: 10px;}</style>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_konten"></tr>
            <tr>
                <td>Kategori Berita</td>
                <td>:</td>
                <td><textarea name="kategori"></textarea></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><textarea name="judul"></textarea></td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>:</td>
                <td><textarea name="isi"></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input style="padding: 10px; color: white; background-color: blue; border: none; border-radius: 10px;" type="submit" name="submit" value="TAMBAH"></td>
            </tr>
        </table>
    </form>
    <a href="?admin=kelola">Kembali Kelola</a>
</div>
<?php
include "koneksi.php";
@$id_konten=$_POST['id_konten'];
@$kategori=$_POST['kategori'];
@$judul=$_POST['judul'];
@$isi=$_POST['isi'];
@$submit=$_POST['submit'];
if($submit){
    $query_insert="INSERT INTO tb_konten VALUES ('','$kategori', '$isi', '$judul');";
    $hasil=mysqli_query($koneksi_db,$query_insert) or die ("ERROR INSERT DATA");
    if ($hasil){
        header('Location:?admin=kelola');
    }
}
?>