<div class="halaman">
    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_konten WHERE kategori='about'";
    $hasil = mysqli_query($koneksi_db, $query);
    $data = mysqli_fetch_array($hasil);

    if (!$data) {
        echo "Data Kosong";
    } else {
        echo "<h3>Halaman : " .$data['kategori']. "</h3> <br>";
        echo $data['isi'];
    }
    
    ?>
</div>