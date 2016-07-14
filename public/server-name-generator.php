<?php
	$adjectives = ['Buffy', 'Spicy', 'Soft', 'Misinformed', 'Great', 'Big', 'Salty', 'Hungry', 'Aloof', 'Hairy', 'Frustrated', 'Calm', 'Smoky', 'Wonderful', 'Incandescent', 'Tossed', 'Quirky', 'Opaque', 'Patriotic', 'Decapitated', 'Elegant', 'Caffinated', 'Electrocuted', 'Dank', 'Frisky'];
	$nouns = ['Ocean', 'Developer', 'Cups', 'Brain', 'Devil', 'Elvis', 'Fruit', 'Rack', 'Space', 'Server', 'Name', 'Person', 'Book', 'Desk', 'Coffee', 'Duck', 'Doggo', 'Elephant', 'Lunch', 'Pupper', 'Pikachu', 'Meme', 'Salad', 'Laser', 'Dingo', 'Tip', 'John', 'Shaft', 'Job'];
	$randomAdj = array_rand($adjectives, 1);
	$randomNoun = array_rand($nouns, 1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
<h1><?php $adjectives[$randomAdj] . ' ' . $nouns[$randomNoun]; ?></h1>
</body>
</html>