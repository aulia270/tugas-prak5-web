<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>HEADER</header>

<div class="container">

<h2>Login</h2>

<form method="post" action="proseslogin.php">

    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="password" name="password">

    <input type="submit" value="Login">

</form>

<?php 
if(isset($_SESSION['error'])){
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
?>

</div>

<footer>FOOTER</footer>

</body>
</html>
