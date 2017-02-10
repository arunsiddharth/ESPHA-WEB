/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
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