<?php 

 if($_GET["id"] == "rammstein")
 {
     $img = "./Myndir/Rammstein.png";
     $LysingAhljomsveitinni = "Rammstein <br>
    meðlimar:<br>
    Frá vinstri <br>
    Christian Lorenz <br>
    Oliver Riedel <br>
    Till Lindemann <br>
    Paul H. Landers <br>
    Christoph Schneider<br>
    Richard Z. Kruspe <br>
    ";
     $youtubelinkur = "https://www.youtube.com/embed/StZcUAPRRac";
     $bakgrunnur = "rammstein";
 }
 if($_GET["id"] == "pantera")
{
     $img = "./Myndir/Pantera.png";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/la1WfEr60yg";
     $bakgrunnur = "svartur";
}
 if($_GET["id"] == "metallica")
{
     $img = "./Myndir/Metallica.png";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/Tj75Arhq5ho";
     $bakgrunnur = "blar";
}
 if($_GET["id"] == "skillet")
 {
     $img = "./Myndir/Skillet.png";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/uGcsIdGOuZY";
     $bakgrunnur = "grar";
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
<body class="<?= ($bakgrunnur); ?>">
    <?php require './includes/Header2.php'; ?>
    <div class="rammi2-2top">
        <div class="rammiundirsida1">
            <img src="<?= ($img); ?>">
        </div>
        <div class="rammiundirsida2 textiPlayfair">
            <?php
            echo $LysingAhljomsveitinni;
            ?>
        </div>
    </div>
    <div class="rammi2-2">
        <iframe src="<?= ($youtubelinkur); ?>" allowfullscreen frameborder="0">
        </iframe>
    </div>
    <?php require './includes/SocialMediaButtons.php'; ?>
  <script src=""></script>
</body>
</html>