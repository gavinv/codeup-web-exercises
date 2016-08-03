<?php
function pagination($array)
{
	$currentPage = Input::get('page');
	$perPage = 4;
	$numPages = ceil(count($array) / $perPage);
	if(!$currentPage || $currentPage > $numPages)
		$currentPage = 0;
	$start = $currentPage * $perPage;
	return array_slice($array, $start, $perPage);
}
function pageNumber($array)
{
	$perPage = 5;
	$numPages = ceil(count($array) / $perPage);
	$pageArray = [];
	for($i = 0; $i < $numPages; $i++)
	{
		array_push($pageArray, $i);
	}
	return $pageArray;
}