<?php 

 if($_GET["id"] == "rammstein")

 $img = "./Myndir/Rammstein.png";
 $LysingAMynd = "";

 if($_GET["id"] == "pantera")
{
 $img = "./Myndir/Pantera.png";
 $LysingAMynd = "";
}
 if($_GET["id"] == "metallica")
{
 $img = "./Myndir/Metallica.png";
 $LysingAMynd = "";
}
 if($_GET["id"] == "skillet")
 {
    $img = "./Myndir/Skillet.png";
    $LysingAMynd = "";
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
    <img src="<?= ($img); ?>">
    <?php require './includes/SocialMediaButtons.php'; ?>
  <script src=""></script>
</body>
</html>