<?php
function pagination($array)
{
	$currentPage = max([Input::get('page', 1), 1]);;
	$perPage = 4;
	$numPages = ceil(count($array) / $perPage);
	if(!$currentPage || $currentPage > $numPages)
		$currentPage = 1;
	$start = ($currentPage - 1) * $perPage;
	return array_slice($array, $start, $perPage);
}
function pageNumber($array)
{
	$perPage = 4;
	$numPages = ceil(count($array) / $perPage);
	$pageArray = [];
	for($i = 1; $i <= $numPages; $i++)
	{
		array_push($pageArray, $i);
	}
	return $pageArray;
}