// get the data from Linköpings kommun

function getArea(){
	console.log("i getArea");

	var omrade = "parkomraden";
	var placePosition = [];

	$.ajax({

		url: 'http://www.klaslofstedt.se/esh/proxy.php?area=$omrade',
		type: 'GET',
	    withCredentials: true,
	}).done(function(data) {
		// console.log(data.toString().length)
		
		for (var i = 0 ; i < 8; i++){

			var name = data.getElementsByTagName("NAMN")[i].childNodes[0].nodeValue;
			var address = data.getElementsByTagName("ADRESS")[i].childNodes[0].nodeValue;
			// var link = data.getElementsByTagName("LINK")[i].childNodes[0].nodeValue;
			
			// console.log(name);
			// console.log("adress: " +address);
			// console.log(link);
		}

		placePosition.push({"name": name, "address": address});	
	}).fail(function(req) {	
		console.log("err");
	});

}

// get SMHI data
function getWeather(){
	console.log("i getWeather");

	// var data = "http://opendata-download-metfcst.smhi.se/api/category/pmp1.5g/version/1/geopoint/lat/58.410807/lon/15.621373/data.json";
	// var json = JSON.parse(data);
	// console.log(data.validTime);

	// var json = JSON.parse(data);
	// var rainIndex, rainValue = [];
	$.ajax({

		// Linköpings: 58.410807, 15.621373
		// var lat = 58.410807;
		// var lon = 15.621373;

		url: 'http://opendata-download-metfcst.smhi.se/api/category/pmp1.5g/version/1/geopoint/lat/58.410807/lon/15.621373/data.json',
		type: 'GET',
		withCredentials: true,
		
	}).done(function(data){
		
		console.log(data);


	}).fail(function(req) {	
		console.log("err");
	});




}