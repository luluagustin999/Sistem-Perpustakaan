<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
if($username == '')
{
    $_SESSION['pesan'] = 'Login Gagal';
    header('location:login.php');
}
else if ($password == '')
{
    $_SESSION['pesan'] = 'Login Gagal';
    header('location:login.php');
}
else
{
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header('location:welcome.php');
               
            }
            else
            {
           
                $_SESSION['pesan'] = 'Login Gagal';
                header('location:login.php');
               
            }
}
?>