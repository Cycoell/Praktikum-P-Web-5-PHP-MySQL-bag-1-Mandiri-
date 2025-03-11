<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "layout/header.html"; ?>

    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>

    <form action="register.php" method="POST">
        <input type="text" placeholder="Username" name="username" />
        <input type="password" placeholder="Password" name="password" />
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>

    <?php include "layout/footer.html"; ?>

</body>
</html>

Dashboard:
<?php
session_start();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('Location: index.php');
}

?>
