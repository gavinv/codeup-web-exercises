<?php
function inputHas($key) {
	if(isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}
}
function inputGet($key, $default = null) {
	return inputHas($key) ? $_REQUEST[$key] : $default;
}
function escape($input) {
	htmlspecialchars($input);
	strip_tags($input);
	return $input;
}