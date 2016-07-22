<?php
function pageController() {
	$data = [];
	$data['contacts'] = parseContacts('contacts.txt');
	if(inputHas('name')) {
		$name = escape(inputGet('name'));
		$number = escape(inputGet('number'));
		addContact($name, $number);
	}
	//add pagination after 8 contacts
	if(inputGet('search')) {
		$search = inputGet('search');
		$data['contacts'] = searchByName($data['contacts'], $search);
	}
	//add a return to full list button if search query is set
	if(inputHas('delete_name')) {
		$deleteContact = inputGet('delete_name');
		deleteContacts($data['contacts'], $deleteContact);
	} 
	return $data;
}
function pagination($array)
{
	$currentPage = inputGet('page');
	$perPage = 5;
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