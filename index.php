<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> UTS </title>
</head>

<body>
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
<!-- banner -->
<section class="banner">
		<h2>SELAMAT DATANG DI WEBSITE KELOMPOK 5</h2>
	</section>
<!-- about -->
<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Kelompok 5 terdiri dari Fricilia Yessi Eka Putri absen 9, Mareta Mahliyasmita absen 13, dan Triana Salsabila Kusuma Dewi absen 24 </p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; 2021 - KELOMPOK 5, All Rights Reserved.</small>
		</div>
	</footer>
<style>
	.banner{
	height: 60vh;
	background-image: url(bgini.jpg);
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
img{
	float:left;
	width:180px;
}

.banner:after{
	content: " ";
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
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
.container:after{
	content: " ";
	display: block;
	clear: both;
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
.active{
	background-color:lightblue;
	color: #fff;
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
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(55, 230, 247, .6);
}
.banner h2{
	color: #fff;
	z-index: 1;
	padding: 20px 25px;
	border: 3px solid #fff;
}
section{
	padding: 50px 0;
}
section h3{
	text-align: center;
	padding: 20px 0;
	color: black;
}
.about p{
	color: black;
	word-spacing: 2px;
	line-height: 25px;
    text-align: center;
}
footer{
	padding: 30px 0;
	background-color:lightblue;
	color: black;
	text-align: center;
}
    </style>
</body>
</html>