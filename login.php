<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Login</h1>

	<div class="kotak_login"></div>
 		<p class="tulisan_login">Silahkan Login</p>
	
	<form method="post" action="controler_login.php">
		username=<input type="text" name="username" required><br>
		password=<input type="password" name="password" required><br>
	

		<br><input type="submit" value="masuk">
	</form>
		<a href="simpan.php">Registrasi</a>

</body>
</html>