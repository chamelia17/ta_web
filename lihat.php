<div class="halaman" style="padding: 20px;">
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query_lihat="SELECT * FROM tb_konten WHERE id_konten='$id';";
    $hasil=mysqli_query($koneksi_db, $query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <style>td {padding: 10px;}</style>
    <h3>Lihat data</h3>
    <table border="1" align="center">
        <tr>
            <td> Kategori : <?php echo $data['kategori']; ?></td>
        </tr>
        <tr>
            <td> Judul : <?php echo $data['judul']; ?></td>
        </tr>
        <tr>
            <td> Isi : <?php echo $data ['isi']; ?></td>
        </tr>
        </table>
        <a href="?admin=kelola">Kembali Kelola</a>
</div>