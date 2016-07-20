<?php
function inputHas($key) 
{
	if(isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}
}
function inputGet($key, $default = null) 
{
	return inputHas($key) ? $_REQUEST[$key] : $default;
}
function escape($input) 
{
	htmlspecialchars($input);
	strip_tags($input);
	trim($input);
	return $input;
}
function parseContacts($filename) 
{
	$contacts = array();
	$contents = trim(file_get_contents($filename));
	$contacts = explode("\n", $contents);
	foreach($contacts as $contact) {
		$splitContacts = explode("|", $contact);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $splitContacts[1]];
	}
	$contacts = $newArray;
	return $contacts;
}
function addContact($name, $number) 
{
	$fileName = ('contacts.txt');
	$handle = fopen($fileName, 'a');
	fwrite($handle, $name . '|' . $number . "\n");
	fclose($handle);
}
function saveContacts($contacts)
{
    $content = '';
    foreach ($contacts as $contact) {
        $content .= implode('|', $contact) . "\n";
    }
    file_put_contents('contacts.txt', $content);
}
function deleteContacts(&$contacts, $name) 
{
	foreach ($contacts as $index => $contact) {
		if (strpos($contact['name'], $name) !== false) {
			unset($contacts[$index]);
		}
	}
	saveContacts($contacts);
	header ('Location: index.php');
	exit;
}
function searchByName($array, $name) 
{
	foreach ($array as $contact) {
		if (stripos($contact['name'], $name) !== false) {
			$filtered[] = $contact;
		}
	}
	return $filtered;
}
