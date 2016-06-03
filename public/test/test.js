
// fibonacci sequence for loop

var a = 1, b = 1, f = a;
console.log(a);
for(var i = 1; f < 10000; i++) {
	console.log(f);
	f = a + b;
	a = b;
	b = f;
} 

// fibonacci fuction

var fib = function(num){

}