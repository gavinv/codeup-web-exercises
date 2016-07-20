<?php
function parseContacts($filename)
{
	$contacts = array();
	$contents = trim(file_get_contents($filename));
	$contacts = explode("\n", $contents);
	foreach($contacts as $contact) {
		$splitContacts = explode("|", $contact);
		$formatNumber = substr($splitContacts[1], 0, 3) . '-' . substr($splitContacts[1], 3, 3) . '-' . substr($splitContacts[1], 6);
		$newArray[] = ['name' => $splitContacts[0], 'number' => $formatNumber];
	}
	$contacts = $newArray;
	return $contacts;
}
$contacts = parseContacts('contacts.txt');
function searchByName($array, $name) {
	foreach ($array as $contact) {
		if (strpos($contact['name'], $name) !== false) {
			$filtered[] = $contact;
		}
	}
	return $filtered;
}
function formatContact($array) {
	echo "\n";
	echo str_pad('Name', 12, " ", STR_PAD_RIGHT);
	echo ' | ';
	echo str_pad('Number', 12, " ", STR_PAD_RIGHT);
	echo ' | ' . PHP_EOL;
	echo '-----------------------------' . PHP_EOL;
	foreach($array as $contact) {
		echo str_pad($contact['name'], 12, " ", STR_PAD_RIGHT);
		echo ' | ';
		echo str_pad($contact['number'], 12, " ", STR_PAD_LEFT);
		echo ' |' . PHP_EOL;
	}
	echo "\n";
}
function addContact($name, $number) {
	$fileName = ('contacts.txt');
	$handle = fopen($fileName, 'a');
	fwrite($handle, $name . '|' . $number . "\n");
	fclose($handle);
}
function deleteContact(&$array, $name) {
	foreach ($array as $index => $contact) {
		if (strpos($contact['name'], $name) !== false) {
			unset($array[$index]);
			continue;
		}
		$contact['number'] = str_replace('-', '', $contact['number']);
		$array[$index] = implode('|', $contact);
	}
	$array = implode("\n", $array);
	$replaceContent = file_put_contents('contacts.txt', $array . PHP_EOL);
}

do {
	fwrite(STDOUT, '--\ CONTACTS MANAGER /--' . PHP_EOL);
	fwrite(STDOUT, "1. View contacts\n2. Add a new contact\n3. Search a contact by name\n4. Delete an existing contact\n5. Exit\nPlease enter an option from above (1, 2, 3, 4 or 5): ");
	$selection = trim(fgets(STDIN));
	switch ($selection) {
		case 1:
			formatContact($contacts);
			break;
		case 2:
			echo 'Contact name: ';
			$name = trim(fgets(STDIN));
			echo 'Phone number: ';
			$number = trim(fgets(STDIN));
			addContact($name, $number);
			$contacts = parseContacts('contacts.txt');
			break;
		case 3:
			echo 'Please enter a name: ';
			$name = trim(fgets(STDIN));
			$searchedContact = (searchByName($contacts, $name));
			formatContact($searchedContact);
			break;
		case 4:
			echo 'Enter name of contact you wish to delete: ';
			$name = trim(fgets(STDIN));
			$searchedContact = searchByName($contacts, $name);
			echo "Are you sure you want to delete contact " . $searchedContact[0]['name'] . "? (Y / N): ";
			if(trim(fgets(STDIN)) === 'y' || trim(fgets(STDIN)) === 'Y') {
				deleteContact($contacts, $name);
				echo "Successfully deleted " . $searchedContact[0]['name'] . PHP_EOL;
			} //will need to have this return to menu if anything else.
			$contacts = parseContacts('contacts.txt');
			break;
		}
} while ($selection != '5');