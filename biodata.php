<!DOCTYPE html>
<html>
<head>
	<title>Biodata Siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Biodata</h1>

 	

	<form  method="post" action="fani.php">
		Nama <input type="text" name="nama" required><br><br>
		Tempat <input type="text" name="Tempat" required><br><br>
		Tanggal Lahir <input type="date" name="tglahir" required><br><br>
		<label name="jk">Jenis Kelamin : </label>
			<input type="radio" name="jk" id="jk" value="Perempuan" >Perempuan
			<input type="radio" name="jk" id="jk" value="Laki-Laki" >Laki-laki
		<br><br>
		<label for="Agama">Agama :</label>
		<select name="Agama">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Hindu">Hindu</option>
		</select>
		<br><br>
		<label>Alamat :</label>
		<textarea name="Alamat"></textarea>
		<br><br>
		<label name="hobi">Hobi :</label>
			<input type="checkbox" name="hobi" value="Makan">Makan
			<input type="checkbox" name="hobi" value="Tidur">Tidur
		<br><br>
		<input type="Submit" name="Submit" value="Masuk ke Belajar Ngoding">
		

			
	</form>
</body>
</html>