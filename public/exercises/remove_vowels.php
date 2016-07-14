<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];

function removeVowels(&$array) {
	foreach($array as $index => $letter) {
		if($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u' || $letter == 'A' || $letter == 'E' || $letter == 'I' || $letter == 'O' || $letter == 'U') {
			unset($array[$index]);
		}
	}
	return $array;
}
removeVowels($array);
var_dump($array);