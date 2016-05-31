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
				1. Wat zou je graag willen kunnen?
				<br>
				2. Met welke persoon kun je goed opschieten?
				<br>
				3. Wat is je favoriete getal?
				<br>
				4. Wat heb je altijd bij je als je op vakantie gaat?
				<br>
				5. Wat is je beste persoonlijke eigenschap?
				<br>
				6. Wat is je slechtste persoonlijke eigenschap?
				<br>
				7. Wat is het ergste dat je kan overkomen?

				</p>
				


				<form action="okunde.php" method="post">
					<input type="text" name="kunnen" placeholder="bijv. vissen">
					<br>
					<input type="text" name="persoon" placeholder="bijv. mitchell">
					<br>
					<input type="text" name="getal" placeholder="bijv. 16">
					<br>
					<input type="text" name="vakantie" placeholder="bijv. zaklamp">
					<br>
					<input type="text" name="eigenschap" placeholder="bijv. samenwerken">
					<br>
					<input type="text" name="seigenschap" placeholder="bijv. stil zitten">
					<br>
					<input type="text" name="overkomen" placeholder="bijv. gebeten worden">
					<br>
					<input type="reset" value="Reset" /><input type="submit"value="Verzenden" /> 
				</form>
				<span class="clear"></span>
			</ul>
		</div>	
</div>

<div class = afbeelding>
	<a href="../index.html"><img class = afbeelding src ="Pijl2.png"></a>
</div>
<h3>Terug naar de hoofdpagina</h3>

<footer>&#169;2015 Mitchell van Potten</footer>

</body>
</html>