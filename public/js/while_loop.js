// ice cream cone do while loop
var allCones = Math.floor(Math.random() * 50) + 50;
console.log("I have " + allCones + " to sell!")

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if(cones > allCones) {
		console.log("I can't sell you " + cones + " I only have " + allCones);
		cones = allCones;
	}
	allCones = allCones - cones;

	console.log(cones + " were sold");
} while (allCones > 0);

console.log("I've sold them all! :D");