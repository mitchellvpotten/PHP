	<?php
	
	$daytime = "";
	$hour = date('H:i');
	date_default_timezone_set('CET');
	$pac = imagecreatefromgif("pacman.gif");
	$ghost = imagecreatefromgif("ghost.gif");
	
	if ( $hour >= "06:00" && $hour <= "11:59"){
		$picture = "morning";	
	}elseif ($hour >= "12:00" && $hour <= "17:59"){
		$picture = "afternoon";
	}elseif ($hour >= "18:00" && $hour <= "23:59"){
		$picture = "evening";
	}elseif ($hour >= "00:00" && $hour <= "05:59")
		$picture = "night";
	
	?>

<!DOCTYPE html>
<head>
	<title>good <?= $picture?></title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-image:url('<?=$picture?>.png');">

<div class="all">
<h1>Good <?=$picture?>! </h1>
<h1><?php echo ('The time is ');  echo date('H:i'); ?></h1>
</div>

<?php
if ($picture == "morning"){
	echo '<marquee behavior="scroll" direction="right"><img src="ghost3.gif">
	&nbsp <img src="pacman.gif"></marquee>';
	echo'<marquee behavior="scroll" direction="right"><img src="ghost.gif">
	&nbsp <img src="pacman.gif"></marquee>';

} elseif ($picture == "afternoon"){
	echo'<marquee behavior="scroll" direction="right"><img src="ghost.gif">
	&nbsp <img src="pacman.gif"></marquee>';
	
} elseif ($picture == "evening"){
	echo '<marquee behavior="scroll" direction="right"><img src="ghost3.gif">
	&nbsp <img src="pacman.gif"></marquee>';
	echo'<marquee behavior="scroll" direction="right"><img src="ghost.gif">
	&nbsp <img src="pacman.gif"></marquee>';

} elseif ($picture == "night"){
	echo '<marquee behavior="scroll" direction="right"><img src="ghost3.gif">
	&nbsp <img src="pacman.gif"></marquee>';
}
?>
	 

</body>

