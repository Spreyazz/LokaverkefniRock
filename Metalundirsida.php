<?php 

 if($_GET["id"] == "rammstein")

 $img = "./Myndir/Rammstein.png";
 $LysingAhljomsveitinni = "Rammstein <br>
meðlimar:<br>
Till Lindemann <br>
Richard Z. Kruspe <br>
Paul H. Landers <br>
Oliver Riedel <br>
Christian Lorenz <br>
Christoph Schneider<br>
";

 if($_GET["id"] == "pantera")
{
 $img = "./Myndir/Pantera.png";
 $LysingAhljomsveitinni = "";
}
 if($_GET["id"] == "metallica")
{
 $img = "./Myndir/Metallica.png";
 $LysingAhljomsveitinni = "";
}
 if($_GET["id"] == "skillet")
 {
    $img = "./Myndir/Skillet.png";
    $LysingAhljomsveitinni = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="css/Stilsida.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
    <?php require './includes/Header2.php'; ?>
    <div class="rammi2-2top">
        <div class="rammiundirsida">
            <img src="<?= ($img); ?>">
        </div>
        <div class="rammiundirsida">
            <?php
            echo $LysingAhljomsveitinni;
            ?>
        </div>
    </div>
    <?php require './includes/SocialMediaButtons.php'; ?>
  <script src=""></script>
</body>
</html>