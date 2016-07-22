// fibonacci sequence for loop

var a = 0, b = 1, f = a;
var fib = [];
var $input = 987;
for(var i = 1; f < ($input + 1); i++) {
	fib.push(f);
	f = a + b;
	a = b;
	b = f;
} 
console.log(fib);
var indexOfNumber = (fib.indexOf($input));
console.log(indexOfNumber);