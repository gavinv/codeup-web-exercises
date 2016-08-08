<?php

$uncapitalized = ['arches', 'badlands', 'carlsbad', 'denali'];
$toCapital = ['denali', 'badlands'];

function capitalize($array1, $array2)
{
	$sameValues = array_intersect($array1, $array2);
	$diffValues = array_diff($array1, $array2);
	$sameValues = array_map('ucfirst', $sameValues);
	$newArray = array_merge($sameValues, $diffValues);
	natcasesort($newArray);
	return $newArray;
}
var_dump(capitalize($uncapitalized, $toCapital));
