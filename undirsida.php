<?php 

 if($_GET["id"] == "rammstein")
 {
     $img = "./Myndir/Rammstein.png";
     $title = "Rammstein";
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
     $title = "Pantera";
     $img2 = "./Myndir/Panterapromo.png";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/la1WfEr60yg";
     $bakgrunnur = "svartur";
}
 if($_GET["id"] == "metallica")
{
     $img = "./Myndir/Metallica.png";
     $title = "Metallica";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/Tj75Arhq5ho";
     $bakgrunnur = "blar";
}
 if($_GET["id"] == "skillet")
 {
     $img = "./Myndir/Skillet.png";
     $title = "Skillet";
     $LysingAhljomsveitinni = "";
     $youtubelinkur = "https://www.youtube.com/embed/uGcsIdGOuZY";
     $bakgrunnur = "grar";
}
if($_GET["id"] == "DeepPurple")
{
    $img = "./Myndir/Deep-Purple.png";
    $title = "Deep Purple";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/RKrNdxiBW3Y";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "JimiHendrix")
{
    $img = "./Myndir/JimiHendrix.png";
    $title = "Jimi Hendrix";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/TLV4_xaYynY";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "PinkFloyd")
{
    $img = "./Myndir/Pink-Floyd.png";
    $title = "Pink Floyd";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/R49d4f5sEs4";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "TheWho")
{
    $img = "./Myndir/the-who.png";
    $title = "The Who";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/5QaVzv5aR6U";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "AZDC")
{
    $img = "./Myndir/azdc.png";
    $title = "AZ DC";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/v2AC41dglnM";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "Genesis")
{
    $img = "./Myndir/genesis.png";
    $title = "Genesis";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/Ccs2rt0oSzQ";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "RHCP")
{
    $img = "./Myndir/rhcp.png";
    $title = "Red Hot Chili Peppers";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/Sb5aq5HcS1A";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "Kiss")
{
    $img = "./Myndir/Kiss.png";
    $title = "Kiss";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/iZq3i94mSsQ";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "Milkey")
{
    $img = "./Myndir/Milkey.png";
    $title = "Milkey";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/qlGQoxzdwP4";
    $bakgrunnur = "grar";
}
if($_GET["id"] == "SvavarKnutur")
{
    $img = "./Myndir/svavar-Knutur.png";
    $title = "Svavar Knútur";
    $LysingAhljomsveitinni = "";
    $youtubelinkur = "https://www.youtube.com/embed/fvmalKyJ6NM";
    $bakgrunnur = "grar";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= ($title); ?></title>
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
    </div>
    <div class="rammi2-2">
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