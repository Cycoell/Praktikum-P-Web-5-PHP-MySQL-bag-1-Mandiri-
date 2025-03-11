<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemograman Website Week 5</title>
</head>
<body>

    <?php include "layout/header.html"; ?>

    <main>
        <p>Halo, selamat datang di website kami</p>
    </main>

    <?php include "layout/footer.html"; ?>

</body>
</html>

Login:
<?php
include "service/database.php";
session_start();

$login_message = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashPassword = hash('sha256', $password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashPassword'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;

        header("location: dashboard.php");
    } else {
        $login_message = "akun tidak ditemukan";
    }  
    $db->close();  
}
?>
