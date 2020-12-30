<!DOCTYPE html>
<html>
<head>
    <title>CRUD dan PDO</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="judul">
        <h1>Operasi CRUD Dengan PDO </h1>
    </div>
    <center>
      <h2>Data User</h3>
        <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Keterangan</th>
                <th>Opsi Lanjutan</th>
            </tr>
        <?php
        include "koneksi.php";
        $nomor = 1;
        $result = $dbh->prepare("SELECT*FROM PEGAWAI");
        $result->execute();       
        while ($data = $result->fetch()) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama_pegawai'] ?></td>
                <td><?php echo $data['tgl_lahir'] ?></td>
                <td><?php echo $data['keterangan'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>"class="hapus">Hapus</a>
                </td> 
            </tr>
    </center>         
    <?php
        }          
    ?>
    </table>
    <br>
    <a href="input.php" class="tombol"> + Tambah User Baru</a>
</body>
</html>