var deadline = 5;
var theCounter; 	//antal torra dagar
var theCurrent;   //fuktighetsvärdet


var d = new Date();
var today = d.getDate(); //return the day

function calculateColor(counter){

	// ändra src på ALLA drop-bildern
	document.getElementById('sensorSize').src = "images/fulls/landingpage.jpg";

	theCounter = 3;
	theCurrent = 13.2;
	var color = "green";
	// return en color
	return color;
}

function sensorResult(color){
	console.log("i sensorResult: " + theCounter);
	
	if(color == "green"){

		document.getElementById('dryDays').innerHTML="Det behövs inte vattnas!";

		// kollar om det är sol snart , 
		// om det är varmt + sol närmsta 4 dagarna, kolla igenom inom 4 dagar
		// om det inte är varmt + sol närmsta 4 dagarna, kolla igenom inom 5 dagar
		document.getElementById('rainDays').innerHTML = "Det kommer att vara fint väder de närmaste dagarna, så återkom om två dygn igen.";

	}
	else if(color == "yellow"){
		document.getElementById('dryDays').innerHTML="Det behövs inte vattnas just nu.";

		// kollar om det är sol snart , 
		// om det är varmt + sol närmsta 4 dagarna, kolla igenom inom 4 dagar
		// om det inte är varmt + sol närmsta 4 dagarna, kolla igenom inom 5 dagar

		// Kollar om det regnar snart
		// regnar inom 3 dagar, behöver ej bry toString
		// regnar ej inom 3 dagar, återkom snart igen
		document.getElementById('rainDays').innerHTML = "Det kommer inte regna inom de närmaste dagara, återkom om några dagar igen.";
	}

	// case röd
	// jämföra hur många dagar som har gått och hur många dagar som är kvar
	// 4-5 dag med ca 15 mm (för greener)

	// calculate the remaing time
	var remainingTime = deadline - theCounter;

	if(remainingTime < 5) console.log("du kan vänta, vattna om " + remainingTime + "dagar");
	else
		console.log("Du beövde vattna igår din jävel");

	document.getElementById('dryDays').innerHTML= remainingTime.toString();

	// calculate the rainDays, närmaste dagen till regn

	//om närmaste dagen < remainingTime, VATTNA
	var rainDay = 1;

	// om ej, behövs ej vattnas då det regnar
	document.getElementById('rainDays').innerHTML = "Det kommer att regna om " + rainDay + " dag, så ni behöver inte vattnas";

}


