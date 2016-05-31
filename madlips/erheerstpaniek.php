<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php

$dier = $_POST['dier'];
$persoon = $_POST['persoon'];
$land = $_POST['land'];
$vervelen = $_POST['vervelen'];
$speelgoed = $_POST['speelgoed'];
$docent = $_POST['docent'];
$geld = $_POST['geld'];
$bezigheid = $_POST['bezigheid'];

?>
</head>
<body>
<div class="all">
	<div class="header">
	<h1>Er heerst paniek!</h1>

	</div>
	<div class="bar">
		<ul>
			<li><a href="#">Er heerst paniek!</a></li>
			<li><a href="#">Onkunde</a></li>
		</ul>
	</div>
<div class="content">
	<?php 
		 echo "\"Er heerst paniek in het koninkrijk $land . 
		Koning $persoon is ten einde raad en als koning $persoon ten einde raad is, dan roept hij 
		zijn ten-einde-raadsheer $docent.\"<br>
		
		\"$docent! Het is een ramp! Het is een schande! \"<br>
		\"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?\"<br>
		\"Mijn $speelgoed is verdwenen! Zo maar, zonder waarschuwing. 
		En ik had net een  $geld voor hem gekocht!\"<br>
		\"Majesteit, uw $speelgoed komt vast vanzelf weer terug?\"<br>
		\"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $vervelen leren?\"<br>
		\"Maar Sire, daar kunt u toch uw $dier voor gebruiken.\"<br>
		\"$docent, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.\"<br>
		\"$bezigheid, Sire.\""

	?>
</div>
<button onclick="history.go(-1);">Ga terug</button>

<div class = afbeelding>
<a href="../index.html"><img class = afbeelding src ="Pijl2.png"></a>
</div>
<h3>Terug naar de hoofdpagina</h3>

<footer>&#169;2015 Mitchell van Potten</footer>

</body>
</html>