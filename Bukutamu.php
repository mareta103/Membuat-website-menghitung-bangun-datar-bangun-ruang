<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> UTS </title>
    <style type="text/css">

body {
background: url(kiw.jpg) no-repeat fixed;
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
<style>
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


        table{
    
    padding-bottom: 5px;
}

h1, h2, h3, p{
    text-align: center;
}
form{
  text-align: center;
}


</style>
<body>  


<?php

// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Buku Tamu</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<div style='text-align: center;'>";
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "</div>";
?>

</body>
</html>