<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php

$kunnen = $_POST['kunnen'];
$persoon = $_POST['persoon'];
$getal = $_POST['getal'];
$vakantie = $_POST['vakantie'];
$eigenschap = $_POST['eigenschap'];
$seigenschap = $_POST['seigenschap'];
$overkomen = $_POST['overkomen'];


?>
</head>
<body>
<div class="all">
	<div class="header">
	<h1>Onkunde</h1>

	</div>
	<div class="bar">
		<ul>
			<li><a href="madlips.php">Er heerst paniek!</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
	</div>
<div class="content">
	<?php 
		 echo "\"Er zijn veel mensen die niet kunnen $kunnen. Neem nou $persoon.\" <br>
\"Zelfs met de hulp van $eigenschap of zelfs met het nummer $getal kan $persoon niet $kunnen.\" <br>
\"Dat heeft niet te maken met een gebrek aan $eigenschap, maar met een te veel aan $seigenschap.\" <br>
\"Te veel $seigenschap leidt tot $overkomen en dat is niet goed als je je $vakantie. wilt gebruiken.\" <br>
\"Helaas voor $persoon.\"<br>" 



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