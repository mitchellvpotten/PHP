<?php

?>

<html>
<head>
	<title>Mad Lips</title>
<link rel="stylesheet" type="text/css" href="style.css">

<!DOCTYPE html>
</head>


<body>
<div class="all">
	<div class="header">
	<h1>Mad Lips</h1>

	</div>
	<div class="bar">
		<ul>
			<li><a href="madlips.php">Er heerst paniek!</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
	</div>
		<div class="content">
			
				<p  style="float: left;">		
				1. Welke dier zou je nooit als huisdier willen hebben?	
				<br>
				2. Wie is de belangrijkste persoon in je leven?
				<br>
				3. In welk land zou je graag willen wonen?
				<br>
				4. Wat doe je als je je verveelt?
				<br>
				5. Met welk speelgoed speelde je het liefst?
				<br>
				6. Bij welke docent spijbel je het liefst?
				<br>
				7. Als je EUR 100.000,- had wat zou je dan kopen?
				<br>
				8. Wat is je favoriete bezigheid?

				</p>
				


				<form action="erheerstpaniek.php" method="post">
					<input type="text" name="dier" placeholder="bijv. hond">
					<br>
					<input type="text" name="persoon" placeholder="bijv. mitchell">
					<br>
					<input type="text" name="land" placeholder="bijv. Nederland">
					<br>
					<input type="text" name="vervelen" placeholder="bijv. gamen">
					<br>
					<input type="text" name="speelgoed" placeholder="bijv. lego">
					<br>
					<input type="text" name="docent" placeholder="bijv. van Potten">
					<br>
					<input type="text" name="geld" placeholder="bijv. auto">
					<br>
					<input type="text" name="bezigheid" placeholder="bijv. lezen">
					<br>
					<input type="reset" value="Reset" /><input type="submit"value="Verzenden" />
				</form>
				<span class="clear"></span>
			</ul>
		</div>	
</div>

<div class = afbeelding>
<a href="../index.html"><img class = afbeelding src ="../Pijl2.png"></a>
</div>

<h3>Terug naar de hoofdpagina</h3>

<footer>&#169;2015 Mitchell van Potten</footer>

</body>
</html>