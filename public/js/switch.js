var luckyNumber = Math.floor(Math.random()* 6)

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