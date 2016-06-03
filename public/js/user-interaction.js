"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
var name = "";

while (name == "") {
	name = prompt("What is your name");
}
// TODO: Show an alert message that welcomes the user based on their input.
alert('Welcome ' + name + ' to the fabulous land of user-interaction!');
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var confirmed = confirm('Do you like some \'za?');
if(confirmed) {
	alert('Sweet d00d');
} else {
	alert('Lamesauce');
}