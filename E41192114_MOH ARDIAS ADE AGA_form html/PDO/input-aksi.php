<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $keterangan = $_POST['keterangan'];

    $result = $dbh->prepare("INSERT INTO PEGAWAI VALUES ('$id','$nama_pegawai','$tgl_lahir','$keterangan')");
    $result->execute();
    header("location:index.php?pesan=input");
?>