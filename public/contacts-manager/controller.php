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