// name entry variables
var myName = document.getElementById('name');
var saveName = document.getElementById('save-name');
var studentName = document.getElementById('student-name');

// grade entry variables
var subjectEntry = document.getElementById('subject');
var gradeEntry = document.getElementById('grade');
var addGrade = document.getElementById('add-grade');
var calculateBtn = document.getElementById('calculate-average');

// table variables
var table = document.getElementById('grades');
var stuAvg = document.getElementById('student-average');

// is awesome
var awesome = document.getElementById('student-awesome');
var practice = document.getElementById('student-practice');

// Submits name and removes disabled grade buttons
var submitName = function() {
	studentName.innerHTML = myName.value;
	addGrade.removeAttribute('disabled');
	calculateBtn.removeAttribute('disabled');
};
saveName.addEventListener('click', submitName, false);

// add info to table
var newGrade = function() {
	var newRow = document.createElement('tr');
	var newContent = "<td>"+ subjectEntry.value +"</td>" + "<td>"+ gradeEntry.value +"</td>";
	newRow.innerHTML = newContent;
	table.insertBefore(newRow, table.firstChild);
	student.addSubject(subjectEntry.value, Number(gradeEntry.value));
	subjectEntry.value = '';
	gradeEntry.value = '';
};
addGrade.addEventListener('click', newGrade, false);

// math!
var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        console.log(subject);
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
};
console.log(student.isAwesome());
var calcAvg = function() {
	newGrade();
	stuAvg.innerHTML = Math.round(student.calculateAverage());
	if (student.isAwesome()) {
		awesome.classList.remove('hidden');
		practice.classList.add('hidden');
	} else {
		practice.classList.remove('hidden');
		awesome.classList.add('hidden');
	};
};
calculateBtn.addEventListener('click', calcAvg, false);
