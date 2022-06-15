<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> UTS </title>
	<style type="text/css">
    body {
    background: url(hexa.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
    }
</style>
</head>
    <!-- header -->
	<header>
		<div class="container">
        
		<ul>
        <a href="https://www.polines.ac.id/id/" ><img src="Logo Polines.png" ></a>
		<li><a href="index.php" > Halaman Utama </a> |
        <li><a href="Bukutamu.php" > Buku Tamu </a> |
        <li><a href="AnggotaKelompok.php" > Anggota Kelompok </a> |
        <li><a href="Soal1.php"  > Hitung IPK </a> |
        <li><a href="Soal2.php"  > Rata-rata Nilai </a> |
        <li><a href="Soal3.php"  > Bangun Datar </a> |
        <li><a href="Soal4.php"  > Bangun Ruang </a> 
        </ul>  
    
	
	</header>
<body>
</style>
<body>  

<style>
        table{
    margin: auto;
    padding-bottom: 5px;
}

h1, h2, h3, p{
    text-align: center;
}
h1, h2, h3, p{
    text-align: center;
}
img{
	float:left;
	width:180px;
}
.banner{
	height: 60vh;
	background-image: url(bgini.jpg);
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}

.banner:after{
	content: " ";
	display: block;
	position: absolute;
	background-color: rgba(55, 230, 247, .6);
}
.banner h2{
	color: #fff;
	z-index: 1;
	padding: 20px 25px;
	border: 3px solid #fff;
}
    *{
	padding: 0;
	margin-top: 0;
	font-family: sans-serif;
}
a{
	color: inherit;
	text-decoration: none;
}
header{
}
header h1{
	float: left;
	padding: 15px 0px;
	color: lightblue;
}
header ul{
	float: left;
}
header ul li{
	display: inline-block;
}
header ul li a{
	padding: 25px 20px;
	display: inline-block;
}
header ul li a:hover{
	background-color:lightblue;
	color: #fff;
}
</style>
<h1>Data Siswa</h1>
<table border="1">
<tr><td>Nama</td><td>Matematika</td><td>Bahasa Indonesia</td><td>Bahasa Inggris</td><td>IPA</td><td>IPS</td></tr>
<?php
$mahasiswa = array(
		array("Adi", "7", "8", "6", "6","7"),
		array("Bunga", "8", "9", "9", "8", "7"),
		array("Candra", "8", "8", "9", "9", "8" ),
		array("Dita", "6", "8", "8", "6", "8"),
		array("Edgar", "5", "6", "5", "6", "6")
		);
			
	for ($row = 0; $row < 5; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 6; $col++) {
			echo "<td>".$mahasiswa[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>

 <h1>Rata-Rata Siswa</h1>
 <table border="1">
<tr><td>Nama</td><td>Rata-Rata</td></tr>
<?php

$rataRataSiswa = array();
for ($i=0; $i < count($mahasiswa); $i++) { 
    $rataRataSiswa[$i] = array_sum(array_slice($mahasiswa[$i], 1)) / 5;
}
for ($i=0; $i < count ($rataRataSiswa); $i++) {
    echo "<tr>"; 
    echo "<td>".$mahasiswa[$i] [0]."</td>";
    echo "<td>".$rataRataSiswa[$i]. "</td>";
    echo "</tr>";
}
?>
</table>

</table>

 <h1>Rata-Rata Mata Pelajaran</h1>
 <table border="1">
<tr><td>Mata Pelajaran</td><td>Rata-Rata</td></tr>
<?php
// Menghitung rata rata tiap nilai mata pelajaran setelah nama
$rataRatamapel = array();
for ($i=1; $i < count($mahasiswa[0]); $i++) { 
    $total = 0;
    for ($j=0; $j < count($mahasiswa); $j++) { 
        $total += $mahasiswa[$j][$i];
    }
    $rataRatamapel[$i] = $total / count($mahasiswa);
}
// array mapel
$mapel = array("Nama Mapel","Matematika", "Bahasa Indonesia", "Bahasa Inggris", "IPA", "IPS");
for ($i=1; $i < count($mapel); $i++) { 
    echo "<tr>"; 
    echo "<td>".$mapel[$i]."</td>";
    echo "<td>".$rataRatamapel[$i]. "</td>";
    echo "</tr>";
}
?>
</table>

</table>

 <h1>Jurusan</h1>
 <table border="1">
<tr><td>Nama</td><td>Jurusan</td></tr>
<?php
$jurusan = array();
for ($i=0; $i < count($mahasiswa); $i++) { 
    if ($mahasiswa[$i][3] > $mahasiswa[$i][4]) {
        $jurusan[$i] = "IPA";
    } else {
        $jurusan[$i] = "IPS";
    }
    if ($rataRataSiswa[$i] < 6) {
        $jurusan[$i] = "Tidak Naik Kelas";
    }
}
for ($i=0; $i < count ($jurusan); $i++) {
    echo "<tr>"; 
    echo "<td>".$mahasiswa[$i] [0]."</td>";
    echo "<td>".$jurusan[$i]. "</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>
