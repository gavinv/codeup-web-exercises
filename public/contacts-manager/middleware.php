<?php
function parseContacts($filename) 
{
	$contacts = array();
	$contents = trim(file_get_contents($filename));
	$contacts = explode("\n", $contents);
	foreach($contacts as $index => $contact) {
		$splitContacts = explode("|", $contact);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $splitContacts[1], 'index' => $index];
	}
	$contacts = $newArray;
	return $contacts;
}
function saveContacts($contacts)
{
    $content = '';
    foreach ($contacts as $contact) {
    	unset($contact['index']);
        $content .= implode('|', $contact) . "\n";
    }
    file_put_contents('contacts.txt', $content);
}