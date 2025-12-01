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
    <title>Makanan Khas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    Makanan Khas — Hi, <?php echo $_SESSION['user']; ?>
</header>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="makanan.php">Makanan Khas</a>
    <a href="logout.php">Keluar</a>
</nav>

<div class="container">
    <h2>Makanan Khas</h2>
    <p>Ini adalah halaman makanan khas dari Modul 4.</p>
</div>

<footer>FOOTER</footer>

</body>
</html>
