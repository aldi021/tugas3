<html>
<link rel="stylesheet" type="text/css" href="css/styleku.css">
<body>
<div id="lala">
	<img src="img/uad.png" width="170px" height="170px">
	<h2><b>UNIVERSITAS AHMAD DAHLAN</b></h2>
	<p>Jl. Ringroad Selatan, Kragilan, Tamanan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55191</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  	<input type="text" class="search" name="nama" required="required" placeholder="Masukkan Nama ...">
  	<br><br>
  	<input type="text" class="nim" name="NIM" required="required" placeholder="Masukkan NIM ..." maxlength="10">


<br><br>
<input class="button" type="submit" value="Submit Data">
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
if (!is_numeric($_POST["NIM"])){
	echo "<center><br><br>NIM HARUS ANGKA</center>";
}
else if(strlen($_POST["NIM"])!=10){
	echo "<center><br><br>NIM HARUS berjumlah 10 angka</center>";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<center><br><br><b>Selamat Datang </b>".$nama." dengan nim ".$NIM."</center>";
}
}
?>
</form>


</div>
</body></html>