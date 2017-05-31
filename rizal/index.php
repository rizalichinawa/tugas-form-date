<?php 
mysql_connect("localhost","root","");
mysql_select_db("tugas") or die("gagal konnek");


$nama = $_POST['nama'];
$c = $_POST['c']; //tahun
$b = $_POST['b'];//bulan
$a = $_POST['a'];//tanggal



if(isset($_POST['simpan'])){
	if(empty($nama)){
		echo "<script type='text/javascript'>alert('nama tidak boleh di kosongi')</script>";
	}else{
	mysql_query("INSERT INTO data values('','$nama','$c/0$b/0$a')");
	echo "<script type='text/javascript'>alert('berhasil menginputkan')</script>";
	}
}
?>
<html>
<head>
<title></title>
</head>
<body>
<form method="post">
<table border="1" width="350" align="center">
<tr>
<td align="right">Nama :</td>
<td><input type="text" name="nama"></td>
</tr>

<tr>
<td align="right">tanggal :</td>
<td>
tahun
<select name="c">
<?php 
for($c = 2017; $c>=1990; $c--){
	echo "<option name='Y'>".$c."</option>";
}
?>
</select>
bulan
<select name="b">
<?php 
for($b = 1; $b<=12; $b++){
	if($b <=9){
		echo "<option name='d'>"."0".$b."</option>";
	}else{
		echo "<option name='d'>".$b."</option>";
	}
}
?>
</select>
tanggal
<select name="a">
<?php 
for($a = 1; $a<=31; $a++){
	if($a <=9){
		echo "<option name='d'>"."0".$a."</option>";
	}else{
		echo "<option name='d'>".$a."</option>";
	}
} 
?>
</select>
</td>
</tr>

<tr>
<td></td>
<td align="right" height="200"><input type="submit" name="simpan" value="simpan"></td>
</tr>
</table>
</form>



</body>
</html>