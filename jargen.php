<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Bangun Datar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error {color:#FF0000;}
    </style>
</head>
<body>
    <?php
	include ("Soal3.php");
	?>
<?php
    $alasErr = $tinggiErr = $sisiaErr =$sisibErr = "";
    $alas = $tinggi = $sisia = $sisib = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["alas"])) {
        $alas = $_POST["alas"];
        $alasErr = "Alas is required";
    } else {
        $alas = test_input($_POST["alas"]);
        if (!preg_match("/^[0-9]*$/",$alas)) {
        $alasErr = "Alas hanya boleh angka";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["tinggi"])) {
            $tinggi = $_POST["tinggi"];
            $tinggiErr = "Tinggi is required";
        } else {
            $tinggi = test_input($_POST["tinggi"]);
            if (!preg_match("/^[0-9]*$/",$tinggi)) {
            $tinggiErr = "Tinggi hanya boleh angka";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["sisia"])) {
            $sisia = $_POST["sisia"];
            $sisiaErr = "Sisi a is required";
        } else {
            $sisia = test_input($_POST["sisia"]);
            if (!preg_match("/^[0-9]*$/",$sisia)) {
            $sisiaErr = "Sisi a hanya boleh angka";
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["sisib"])) {
            $sisib = $_POST["sisib"];
            $sisibErr = "Sisi b is required";
        } else {
            $sisib = test_input($_POST["sisib"]);
            if (!preg_match("/^[0-9]*$/",$sisib)) {
            $sisibErr = "Sisi b hanya boleh angka";
            }
        }
    }

    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <center><br>
    <h1>Rumus Jajar Genjang</h1><br>
    <img src="jargen.jpeg" width="300px" height="200px">
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Alas = <input type="text" name="alas" value="<?php echo $alas;?>"> cm
    <span class="error">* <?php echo $alasErr;?></span>
    <br><br>
    Tinggi = <input type="text" name="tinggi" value="<?php echo $tinggi;?>"> cm
    <span class="error">* <?php echo $tinggiErr;?></span>
    <br><br>
    Sisi a = <input type="text" name="sisia" value="<?php echo $sisia;?>"> cm
    <span class="error">* <?php echo $sisiaErr;?></span>
    <br><br>
    Sisi b = <input type="text" name="sisib" value="<?php echo $sisib;?>"> cm
    <span class="error">* <?php echo $sisibErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Hitung"><br><br>
    <?php
        @$luas=$alas*$tinggi;
        @$keliling=2*($sisia+$sisib);

       echo "<h3>Hasil :</h3>";
       echo "Luas Jajar Genjang = ".$luas." cm<sup>2</sup><br><br>";
       echo "Keliling Jajar Genjang = ".$keliling." cm<br><br>";
        ?>
    </form>
    </center><br><br>

</body>
</html>