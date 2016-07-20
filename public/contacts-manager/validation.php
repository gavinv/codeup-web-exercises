<?php
require_once 'functions.php';
function isValidName($name)
{
    return (escape($name) !== "");
}
function isValidPhoneNumber($phoneNumber)
{
    return !empty(escape($phoneNumber)) && is_numeric($phoneNumber)
        && (strlen($phoneNumber) == 7 || strlen($phoneNumber) == 10);
}
function inputName($name)
{
    if (isValidName($name)) {
        return $name;
    }
    return inputName($name);
}
function inputNumber($message)
{
    $number = inputGet('number');
    if (isValidPhoneNumber($number)) {
        return $number;
    }
    // alert('Please enter a phone number with 7 or 10 digits');
    return inputNumber($message);
}