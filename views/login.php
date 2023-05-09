<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<form action="../controllers/LoginController.php" method="POST">
		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password" required><br>

		<a href="./lupa-password.php">Lupa Password?</a><br>
		<input type="submit" value="Login">
	</form>
	<p>Belum punya akun? <a href="./register.php">Daftar</a></p>
</body>
</html>