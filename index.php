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
<body>
    <?php require './includes/Header.php'; ?>
    	<section class="row">
        <label for="menu-toggle"><span>&#9776;</span></label>
            <ul>
                <a class="I-I" id="Metal">Metal</a>
                <a class="I-I" id="ClassicRock">Classic Rock</a>
                <a class="I-I" id="Rock">Rock</a>
                <a class="I-I" id="Indi">indi</a>
            </ul>
	   </section>
     <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="Metal1">
            Metal
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/rammstein.png"></a>
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/pantera.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/Metallica.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/Skillet.png"></a>
        </div>
    </div>
    <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="ClassicRock1">
            Classic Rock
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/Deep-Purple.png"></a>
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/JimiHendrix.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/Pink-Floyd.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/the-who.png"></a>
        </div>
    </div>
        <div class="rammi2-2 group">
        <div class="textiPlayfairborder" id="Rock1">
            Rock
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/azdc.png"></a>
        </div>
        <div class="rammi1-2">
        <a href=".HTML"><img src="./Myndir/genesis.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/rhcp.png"></a>
        </div>
        <div class="rammi1-2">
            <a href=".HTML"><img src="./Myndir/kiss.png"></a>
        </div>
    </div>
    <!--Milkey Change Svavar Knútur -->
    <?php require './includes/SocialMediaButtons.php'; ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="animated-scroll.js"></script>
  </body>
    
</html>