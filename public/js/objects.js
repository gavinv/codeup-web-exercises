(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;

var person = {}

person.firstName = 'Gavin';
person.lastName = 'Vaught';

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that

	person.sayHello = function () {
	alert("Hello " + person.firstName + " " + person.lastName + "!");
}
    // alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.

	person.sayHello();
})();
