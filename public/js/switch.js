var luckyNumber = Math.floor(Math.random()* 6);

	switch(luckyNumber) {
		case 0:
			console.log("Sorry, you're not a winner");
			break;
		case 1:
			console.log("Your total is $" + 60*.9);
			break;
		case 2:
			console.log("Your total is $" + 60*.75);
			break;
		case 3:
			console.log("Your total is $" + 60*.65);
			break;
		case 4:
			console.log("Your total is $" + 60*.5);
			break;
		case 5:
			console.log("What a steal! :D");
			break;
		default:
			console.log("I'm broken.");

	}

var month = Math.floor(Math.random()* 12 + 1);

	switch(month) {
		case 1:
			console.log("January");
			break;
		case 2:
			console.log("February");
			break;
		case 3:
			console.log("March");
			break;
		case 4:
			console.log("April");
			break;
		case 5:
			console.log("May");
			break;
		case 6:
			console.log("June");
			break;
		case 7:
			console.log("July");
			break;
		case 8:
			console.log("August");
			break;
		case 9:
			console.log("September");
			break;
		case 10:
			console.log("October");
			break;
		case 11:
			console.log("November");
			break;
		case 12:
			console.log("December");
			break;
		default:
			console.log("I'm broken :-(")
	}