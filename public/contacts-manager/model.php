<?php
require_once 'validation.php';
function addContact($name, $number) 
{
	if (isValidName($name) && isValidPhoneNumber($number)) {
		$fileName = ('contacts.txt');
		$handle = fopen($fileName, 'a');
		fwrite($handle, $name . '|' . $number . "\n");
		fclose($handle);
		$_SESSION['message'] = "Successfully added contact";
	} else {
		$_SESSION['message'] = "Invalid input, did not add contact";
	}
	header ('Location: index.php');
	exit;
}
function deleteContacts(&$contacts, $idNumber) 
{
	foreach ($contacts as $index => $contact) {
		if (strpos($contact['index'], $idNumber) !== false) {
			unset($contacts[$index]);
		}
	}
	saveContacts($contacts);
	header ('Location: index.php');
	exit;
}
function searchByName($array, $search) 
{
	foreach ($array as $contact) {
		if (stripos($contact['name'], $search) !== false) {
			$filtered[] = $contact;
		} elseif (stripos($contact['number'], $search) !== false) {
			$filtered[] = $contact;
		}
	}
	return $filtered;
}
function formatNumber($string) {
	if(strlen($string) == 7) {
		$formatNumber = substr($string, 0, 3) . '-' . substr($string, 3);
	} elseif(strlen($string) == 10) {
		$formatNumber = '(' . substr($string, 0, 3) . ') ' . substr($string, 3, 3) . '-' . substr(($string), 6);
	}
	return $formatNumber;
}
// function formatNumber($contacts) {
// 	foreach($contacts as $index => $contact) {
// 		$number = $contact['number'];
// 		if(strlen($number) == 7) {
// 			$formatNumber = substr($contact['number'], 0, 3) . '-' . substr($contact['number'], 3);
// 		} elseif(strlen($number) == 10) {
// 			$formatNumber = '(' . substr($contact['number'], 0, 3) . ') ' . substr($contact['number'], 3, 3) . '-' . substr(($contact['number']), 6);
// 		}
// 		$newArray[] = ['name' => $contact['name'], 'number' => $formatNumber, 'index' => $index];
// 	}
// 	$contacts = $newArray;
// 	return $contacts;
// }