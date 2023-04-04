<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ./login.php');
    exit();
}

require_once '../models/UserModel.php';

$userModel = new UserModel();
$user = $userModel->getUserById($_SESSION['id']);
if ($user !== null) {
    $nama_lengkap = $user['nama_lengkap'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Selamat Datang <?php if(isset($nama_lengkap)){echo $nama_lengkap;} ?> </h2>

    <a href="./profil.php">Profil</a><br>
    <a href="./settings.php">Settings</a><br><br>

    <a href="../controllers/LogoutController.php">Logout</a>
</body>
</html>
