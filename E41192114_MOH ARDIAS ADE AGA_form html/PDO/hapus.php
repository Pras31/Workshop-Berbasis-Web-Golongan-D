<?php
include 'koneksi.php';
$id = $_GET['id'];

$result = $dbh->prepare("DELETE FROM PEGAWAI WHERE id=$id");
$result->execute();        
header("location:index.php?pesan=hapus")
?>