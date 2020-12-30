<!DOCTYPE html>
<html>
<head>
    <title>CRUD dan PDO</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="judul">
        <h1>Operasi CRUD Dengan PDO <L</h1>
    </div>
    <br>
    <a href="index.php">Lihat Semua User</a>         
    <br>
    <h3>Edit data</h3>
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $result = $dbh->prepare("SELECT * FROM pegawai WHERE id=$id");
        $result->execute();
        $data = $result->fetch();
    ?>
        <form method="POST" action="update.php" >
            <table>
                <tr>
                    <td>Id Pegawai</td>
                    <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama pegawai</td>
                    <td><input type="text" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
                </tr>            
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>                
                </tr>
            </table>
        </form>        
</body>
</html>