<?php
require_once '../models/UserModel.php';

session_start();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    <h2>Settings</h2>

    <a href="./user.php?id=<?php echo $id; ?>">Profil</a><br>
    <a href="./ubah-password.php">Ubah Password</a>
</body>
</html>
