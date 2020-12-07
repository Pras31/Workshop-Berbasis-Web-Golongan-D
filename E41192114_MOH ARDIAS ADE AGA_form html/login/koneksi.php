<?php
$koneksi = mysqli_connect("localhost","root","","web");

if(mysqli_connect_error()){
    echo "Koneksi databases gagal : ".mysqli_connect_error();
}
?>