// 'use strict';

// var name = prompt('Give me your name');
// var subject = prompt(name + ', what is the subject?');
// var gradesPrompt = prompt('Please enter your first grade');
// var arrayGrades = [Number(gradesPrompt)];
// var awesomeGrade = 80;
// var otherGrades = confirm('Are there any other grades?');

// while (otherGrades == true) {
//  var nextGrade = prompt('Please enter next grade');
//  arrayGrades.push(Number(nextGrade));
//  otherGrades = confirm('Are there any other grades?');
// } 
// console.log(arrayGrades);
// var average = {
//  grades: this.arrayGrades,
//  totalGrades: this.arrayGrades.length,

//  getAverage: function() {
//      var total = 0;
//      for(var i = 0; i < this.totalGrades; i++) {
//           total = (total + this.grades[i]);
//      }
//      return (total / this.totalGrades);  
//  }
// };


// if (average.getAverage() > awesomeGrade) {
//  alert("You're Awesome " + name + "!!!! Your average for " + subject + " is " + average.getAverage());
// } else {
//  alert("You need more practice " + name + ". Your average for " + subject + " is " + average.getAverage());
// }


//heb question

var discountCostRequirement = 200;
var discount = 0.35;

var customers = [];
do {
 var customer = {
     name: null,
     products: [],
     getTotal: function() {
         var total = 0;
         for(var i = 0; i < this.products.length; i++) {
             total = (total + this.products[i].price);
         }
         if(total >=  discountCostRequirement) {
             finalCost = total - (total * discount);
         } else {
             finalCost = total;
         }
         return finalCost;
     }
 }

 customer.name = prompt('What is your name?');
 var moreProducts = confirm('Do you have any products?');
 while(moreProducts == true) {
     var product = {name: null, price: null};
     product.name = prompt('Please list your product name');
     product.price = Number(prompt('Price'));
     customer.products.push(product);
     moreProducts = confirm('Are there any more products?')
 }
 console.log(customer.getTotal());
 customers.push(customer);
 var moreCustomers = confirm('Are there more customers?')
} while (moreCustomers);

console.log(customers);
// alert('Here are all the total costs: ' + customers.getTotal())
for(var i = 0; i < customers.length; i++) {
 document.write(customers[i].name + ": $" + customers[i].getTotal() + " ");
};