<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> UTS </title>
    <style type="text/css">
    body {
    background: url(rocket.jpg) no-repeat fixed;
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
 
<div class="dropdown">
  <button class="dropbtn">Bangun Ruang</button>
  <div class="dropdown-content">
          <li><a href="balok.php">Balok</a></li>
					<li><a href="tabung.php">Tabung</a></li>
					<li><a href="bola.php">Bola</a></li>
					<li><a href="kerucut.php">Kerucut</a></li>
  </div>
</div>
    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: navy;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: pink;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: salmon}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: palevioletred;
}


h1, h2, h3, p{
    text-align: center;
}
img{
	float:center;
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

</body>
</html>