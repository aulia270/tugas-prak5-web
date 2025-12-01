<?php
session_start();

// proteksi halaman
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    Dashboard — Hi, <?php echo $_SESSION['user']; ?>
</header>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="makanan.php">Makanan Khas</a>
    <a href="logout.php">Keluar</a>
</nav>

<div class="container">
    <h2>Dashboard</h2>
    <p>Anda telah berhasil login</p>
</div>

<footer>FOOTER</footer>

</body>
</html>
