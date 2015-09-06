var deadline = 5;
var theCounter; 	//antal torra dagar
var theCurrent;   //fuktighetsvärdet


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

	theCounter = counter;
	theCurrent = current;
	var source = "images/kartor/" + color + ".png";
	console.log(source);
	document.getElementById('sensorSize1').src = source;

	// return en color
	return color;
}

function sensorResult(color){
	console.log("i sensorResult: " + theCounter);
	var rain = weather();
	console.log(rain);
	console.log("I sensorResult");
	
	if(color == "green"){
		document.getElementById('dryDays').innerHTML = "Det behöver inte vattnas!";

		// kollar om det är sol snart , 
		// om det är varmt + sol närmsta 4 dagarna, kolla igenom inom 4 dagar
		// om det inte är varmt + sol närmsta 4 dagarna, kolla igenom inom 5 dagar
		document.getElementById('rainDays').innerHTML = "Återkom igen om några dagar."	

		// dåligt väder
		document.getElementById('rainDays').innerHTML = "Det kommer vara fint väder de närmsta dagarna, så återkom igen om två dagar."	
	}

	else if(color == "yellow"){

		// kollar om det är sol snart , 
		// om det är varmt + sol närmsta 4 dagarna, kolla igenom inom 4 dagar
		// om det inte är varmt + sol närmsta 4 dagarna, kolla igenom inom 5 dagar
		document.getElementById('dryDays').innerHTML = "Det behöver inte vattnas!";

		// Kollar om det regnar snart
		// regnar inom 3 dagar, behöver ej bry toString
		// regnar ej inom 3 dagar, återkom snart igen
		document.getElementById('rainDays').innerHTML = "Återkom igen om två dagar.";
	}

	else if (color == "red"){

		// case röd
		// jämföra hur många dagar som har gått och hur många dagar som är kvar
		// 4-5 dag med ca 15 mm (för greener)

		// calculate the remaing time
		var remainingTime = deadline - theCounter;

		if(remainingTime < 5) document.getElementById('dryDays').innerHTML= "Det bör vattnas idag, men";
		else{
			
			document.getElementById('dryDays').innerHTML= "Det behöver inte vattnas förrens " + remainingTime + "dagar";
		}

		// calculate the rainDays, närmaste dagen till regn

		//om närmaste dagen < remainingTime, VATTNA
		var rainDay = 1;

		// om ej, behövs ej vattnas då det regnar
		document.getElementById('rainDays').innerHTML = "det kommer att regna om " + rainDay + " dag.";

	}



}

function weather() {
	var weather = [false, false, false, false, false, false, false, false, false, true, false];

	var counter = 10;
	var test = false;
	/*while(test = false) {
		test = weather[counter];
		counter= counter +1;

	}
	console.log("hoppis" + counter);*/

	return counter;

}


