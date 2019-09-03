<?php 
	$username=@_POST['username'];
	$password=@_POST['password'];

	if ($username = 'fanni' && $password='123') {
		header('Location: biodata.php');
	}
	else{
		echo "gagal";
	}
 ?>
