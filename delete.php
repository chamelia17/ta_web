<div class="halaman">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_delete = "DELETE FROM tb_konten WHERE id_konten = '$id';";
    $hasil = mysqli_query($koneksi_db, $query_delete);

    if ($hasil) {
        header('Location: admin.php?admin=kelola');
    } else {
        echo 'gagal hapus';
    }
    ?>
</div>