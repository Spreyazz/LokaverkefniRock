<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Lokaverkefni</title>

  <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="css/Stilsida.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body class="liturbody2">
    <?php require './includes/Header.php'; ?>
<!--     	<section class="row">
            <a class="I-I" id="Metal">Metal</a>
            <a class="I-I" id="ClassicRock">Classic Rock</a>
            <a class="I-I" id="Rock">Rock</a>
            <a class="I-I" id="Indi">indi</a>
	   </section> -->
     <div class="rammi2-2top group">
        <div class="textiPlayfairborder" id="Metal1">
            Metal
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?id=rammstein"><img src="./Myndir/rammstein.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?id=pantera"><img src="./Myndir/pantera.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?id=metallica"><img src="./Myndir/Metallica.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?id=skillet"><img src="./Myndir/Skillet.png"></a>
        </div>
    </div>
    <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="ClassicRock1">
            Classic Rock
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?id=DeepPurple"><img src="./Myndir/Deep-Purple.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?JimiHendrix"><img src="./Myndir/JimiHendrix.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?PinkFloyd"><img src="./Myndir/Pink-Floyd.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?TheWho"><img src="./Myndir/the-who.png"></a>
        </div>
    </div>
        <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="Rock1">
            Rock
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?AZDC"><img src="./Myndir/azdc.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="undirsida.php?Genesis"><img src="./Myndir/genesis.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?RHCP"><img src="./Myndir/rhcp.png"></a>
        </div>
        <div class="rammi1-2">
            <a href="undirsida.php?Kiss"><img src="./Myndir/kiss.png"></a>
        </div>
    </div>
    <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="Indi1">
            Indi
        </div>
            <div class="rammi1-2">
                <a href="undirsida.php?Milkey"><img src="./Myndir/Milkey.png"></a>
            </div>
            <div class="rammi1-2">
                <a href="undirsida.php?SvavarKnutur"><img src="./Myndir/svavar-Knutur.png"></a>
            </div>

    </div>
    <?php require './includes/SocialMediaButtons.php'; ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="animated-scroll.js"></script>
  </body>
    
</html>