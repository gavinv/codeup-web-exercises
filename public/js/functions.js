"use strict";

var myNameIs = 'Gavin';

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.
function sayHello(name) {
	console.log("Greetingsgit  " + myNameIs + "!");
}
// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
sayHello(myNameIs);
// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.
function isOdd(number) {
	((number % 2) == 1) ? console.log(number + " is odd") : console.log(number + " is even")
}
isOdd(random);
// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.


//function for for_loop_js question 1
function repeat(i, j) {
	for (var i = 1; i <= 10; i++) {
		repeatedText = ''
		for (var j = 1; j <= i; j++) {
			console.log()
		}
	}
}