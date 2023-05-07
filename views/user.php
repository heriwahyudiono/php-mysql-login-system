<?php
require_once '../models/UserModel.php';

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ./login.php?url=".urlencode($_SERVER['REQUEST_URI']));
}

$userModel = new UserModel();

$id = $_GET['id'];

$user = $userModel->getUserById($id);

$nama_lengkap = $user['nama_lengkap'];
$jenis_kelamin = $user['jenis_kelamin'];
$tanggal_lahir = $user['tanggal_lahir'];
$tanggal_lahir = date('d-m-Y', strtotime($tanggal_lahir));
$email = $user['email'];
$nomor_telepon = $user['nomor_telepon'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h2>Profil</h2>
    
    <p>Nama: <?php echo $nama_lengkap; ?></p>
    <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
    <p>Tanggal Lahir: <?php echo $tanggal_lahir; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Nomor Telepon: <?php echo $nomor_telepon; ?></p>

    <a href="./edit-profil.php">Edit Profil</a><br>
    <a href="./home.php">Kembali</a>
</body>
</html>
