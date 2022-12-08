<div class="halaman" style="padding: 8px;">
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query="SELECT * FROM tb_konten WHERE id_konten='$id';";
    $hasil=mysqli_query($koneksi_db,$query);
    $data=mysqli_fetch_array($hasil);
    ?>
    <style>td {padding: 10px;}</style>
    <h3>Edit data</h3>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_konten" value="<?php echo $data['id_konten'];?>"></tr>
            <tr>
                <td>Kategori Berita</td><td>:</td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
            </tr>
            <tr>
                <td>Judul</td><td>:</td>
                <td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
            </tr>
            <tr>
                <td>Isi Berita</td><td>:</td>
                <td><textarea name="isi"><?php echo $data['isi']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="UPDATE" style="background-color: green; border: none; border-radius: 10px; color: white; padding: 5px; font-size: 11pt;">
                </td>
            </tr>
            </table>
            </form>
<a href="?admin=kelola">Kembali Kelola</a>
</div>
<?php
@$id_konten=$_POST['id_konten'];
@$kategori=$_POST['kategori'];
@$judul=$_POST['judul'];
@$isi=$_POST['isi'];
@$submit=$_POST['submit'];
if($submit){
    $query_update="UPDATE tb_konten SET kategori='$kategori',judul='$judul',isi='$isi' WHERE id_konten='$id_konten';";
    $hasil=mysqli_query($koneksi_db,$query_update) or die ("ERROR UPDATE DATA");
    if($hasil){
        header ('Location: ?admin=kelola');
    }
}
?>