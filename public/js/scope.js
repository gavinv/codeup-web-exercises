"use strict";

(function() {

	var myNameIs = 'Gavin';
	function sayHello(name) {
		console.log("Greetings  " + myNameIs + "!");
	}
	sayHello(myNameIs);


	var random = Math.floor((Math.random()*100)+1);
	function isOdd(number) {
		((number % 2) == 1) ? console.log(number + " is odd") : console.log(number + " is even")
	}
	isOdd(random);

	//nesting function in an IIFE

	function repeat(i, j) {
		for (var i = 1; i <= 10; i++) {
			repeatedText = ''
			for (var j = 1; j <= i; j++) {
				console.log()
			}
		}
	}
})();