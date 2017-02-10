/*
 * Global JavaScript, if any.
 */

function validate(id){
	var items = document.getElementById(id).elements;
	var i;
	var len =items.length;
	for(i=0;i<len;i++){
		if((items.item(i).name == "name" || items.item(i).name == "email" || items.item(i).name == "password")&& items.item(i).value == ""){
			alert("Sorry! " + items.item(i).name+" field is empty");
			return false;
		}
	}	
	return true;
}

function search(query){
	var parameters = {
		q: query,
		appid: 'c94c53dccff8ed5d5e59670caedeb325'
	};
	$.getJSON("https://api.thingspeak.com/apps/thinghttp/send_request?api_key=NCQ5FV7CNDHHFRI3")
	.done(function(data, textStatus, jqXHR){
		        
                        if(data.length==0){
				//no data
			alert("Empty");	
			}
			else{
				//prepare data
				$("#name").html(data.name);
                                $("#des").html(data.weather[0].description);
				$("#temp").html((data.main.temp-273).toFixed(2) +' C');
				$("#cld").html(data.clouds.all+' %');
				$("#pres").html(data.main.pressure+' hpa');
				$("#wind").html(data.wind.speed+' m/s');
                                $("#winddir").html(data.wind.deg+' deg N');
				
				
			}
	})
	.fail(function(jqXHR, textStatus, errorThrown){
		//log error
                console.log(jqXHR);
	})
}