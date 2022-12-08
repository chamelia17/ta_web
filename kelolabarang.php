<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="halaman">
    <?php
    include "koneksi.php";
    if(isset($_GET['admin'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            default:
            $query="SELECT * FROM tb_konten";
            $hasil=mysqli_query($koneksi_db, $query);
            ?>
            <center><h3>Halaman Kelola Barang</h3></center>
            <a href="?admin=kelola&aksi=tambah">Tambah</a>
            <table class="table table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php
                $no=1;
                while ($data = mysqli_fetch_array($hasil)){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['isi']; ?></td>
                    <td><a href="?admin=kelola&aksi=lihat&id=<?php echo $data['id_konten'];?>">View</a></td>
                    <td><a href="?admin=kelola&aksi=update&id=<?php echo $data['id_konten'];?>">Update</a></td>
                    <td><a style="color: red;" href="?admin=kelola&aksi=delete&id=<?php echo $data['id_konten'];?>"onclick="return confirm('Apakah anda yakin menghapus data?')">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <!-- <table border="1" align="center">
                
        </table> -->
        <?php
        break;
        case 'tambah':
        include 'admin/tambah.php';
        break;
        case 'lihat':
        include 'admin/lihat.php';
        break;
        case 'update':
        include 'admin/update.php';
        break;
        case 'delete':
        include 'admin/delete.php';
        break;
        }
    }else{
        include 'admin/home.php';
    }
    ?>
</div>