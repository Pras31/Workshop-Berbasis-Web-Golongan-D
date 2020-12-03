<?php 
// $email = $_POST['email'];
// $password = $_POST['password'];
// $email_saya = "arvitaagusk88@gmail.com";
// $password_saya = 12345678;
// if((strcasecmp($email_saya, $email) == 0)&&($password_saya==$password)){
//     session_start();
//     $_SESSION['email'] = $email;
//     header("location:index.php?pesan=berhasil");
// }
// else{
//     header("location:login.php?pesan=gagal");
// }

session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$querySql = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
$data = mysqli_fetch_array($querySql);
if ($email == $data['email']) {
    if ($password == $data['password']) {
        header("location:index.php?pesan=berhasil");
    }else {
        header("location:login.php?pesan=passwordsalah");
    }
}else {
    header("location:login.php?pesan=emailsalah");
}
?>