<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_pegawai = $_POST['nama_pegawai'];
$tgl_lahir = $_POST['tgl_lahir'];
$keterangan = $_POST['keterangan'];


$result = $dbh->prepare("UPDATE pegawai SET id=:id, nama_pegawai=:nama_pegawai, tgl_lahir=:tgl_lahir, keterangan=:keterangan WHERE id=:id");
$result->bindParam(':id',$id);
$result->bindParam(':nama_pegawai', $nama_pegawai);
$result->bindParam(':tgl_lahir', $tgl_lahir);
$result->bindParam(':keterangan', $keterangan);

$result->execute();
header("location:index.php?pesan=update");
?>