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
    <br>
    <a href="index.php">Lihat Semua User</a>       
    <br>
    <h3>Input User Baru</h3>
    <form action="input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Id Pegawai</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama pegawai</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>            
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>  
            </tr>
        </table>
    </form>
</body>
</html>
