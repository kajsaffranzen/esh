var deadline = 5;

var d = new Date();
var today = d.getDate(); //return the day


function calculateColor(current, counter, value){

	var rain = weather();

	// ändra src på dropp-bildern
	if(counter < 5 || current > value || rain < 3){
	color = "green";
	}
	else if(counter >= 5 || counter < 10 ) {
	color = "yellow";
	}
	else	{
	 color = "red";
	}
	var source = "images/kartor/" + color + ".png";
	console.log(source);
	document.getElementById('sensorSize').src = source;

	// return en color
	return color;
}



function greenSensor(){

	// document.getElementById('dryDays').innerHTML="GRÖN";
	// document.getElementById('dryDays').innerHTML=remainingTime.toString();

	console.log("Du behöver ej vattna");
	//det är fuktigt
}

function yellowSensor(){

	console.log("Du behöver kanske vattna");
	// document.getElementById('dryDays').innerHTML = "GREEN";
	// document.getElementById('dryDays').innerHTML=remainingTime.toString();
}

//man behöver vattna snarast
// jämföra hur många dagar som har gått och hur många dagar som är kvar
// 4-5 dag med ca 15 mm (för greener)

function redSensor(){


	// get counter from database
	var x = 3;

	// calculate the remaing time
	var remainingTime = deadline - x;

	if(remainingTime < 5) console.log("du kan vänta, vattna om " + remainingTime + "dagar");
	else
		console.log("Du beövde vattna igår din jävel");

	document.getElementById('dryDays').innerHTML= remainingTime.toString();

}

function weather() {
	var weather = [false, false, false, false, false, false, false, false, false, true, false];

	var counter = 0;
	var test = false;
	while(test = false) {
		test = weather[counter];
		counter++;

	}
	return counter;

}


