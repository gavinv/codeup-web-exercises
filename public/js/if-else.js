// Question 1
var avgGrades = (70+80+95)/3;

if(avgGrades >= 80) {
	console.log("You're Awesome!")
} else {
	console.log("You need more practice");
}

// Question 2
var cameron = 180;
var ryan = 250;
var george = 320;
var discount = .65;

if(cameron >= 200) {
	console.log("Cameron paid $" + cameron + " and has a discounted price of $" + (cameron*discount));
} else {
	console.log("Cameron paid $" + cameron + " and has no discount :c");
}
if(ryan >= 200) {
	console.log("Ryan paid $" + ryan + " and has a discounted price of $" + (ryan*discount));
} else {
	console.log("Ryan paid $" + ryan + " and has no discount :c");
}
if(george >= 200) {
	console.log("George paid $" + george + " and has a discounted price of $" + (george*discount));
} else {
	console.log("George paid $" + george + " and has no discount :c");
}

// Question 3
var flipACoin = Math.floor(Math.random()* 2);

if(flipACoin == 0) {
	console.log("Buy a car homie");
} else {
	console.log("Buy dat house boi");
}

// the above if/else written as a ternary
console.log((flipACoin == 0) ? "Buy a car homie" : "Buy dat house boi");