<?php
session_start();

// daftar akun valid
$akun = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "xxx"   => "yyy"      // ganti dengan username & password kamu
];

// ambil input
$user = $_POST['username'];
$pass = $_POST['password'];

// cek username terdaftar atau tidak
if (!array_key_exists($user, $akun)) {
    $_SESSION['error'] = "Username tidak terdaftar";
    header("Location: login.php");
    exit();
}

// cek password
if ($akun[$user] != $pass) {
    $_SESSION['error'] = "Password yang dimasukkan salah";
    header("Location: login.php");
    exit();
}

// login berhasil
$_SESSION['user'] = $user;

header("Location: dashboard.php");
exit();
?>
