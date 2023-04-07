"use strict"
window.onload=complete;
//window.onload=pageLoad;
function pageLoad(){
	document.getElementById("textchange").onmouseover = changeColor;
	document.getElementById("textchange").onmouseout = changeColor;
document.getElementById("submit").onclick=validate;	


}
	//document.getElementById("submit").onclick=validate;	
	//document.getElementById("submit").onsubmit=validate;	
	
	
	
	
	function changeColor()
{
  var dom=document.getElementById("textchange");
  //alert(event.type);

  if(event.type == "mouseover"){
     dom.style.color='red';
     dom.style.font='italic 16pt Times';
  }
  else {
     dom.style.color='blue';
     dom.style.font='normal 16pt Times';

  }

}
	
	
function validate(){
	

	
	var firstname =document.getElementById("fname").value;
	
	
	if(firstname==""){
		alert("First name is empty").value;
		document.getElementById("fname").select();
		return false;
	}
	
	
	var lastname =document.getElementById("lname").value;
	
	
	if(lastname==""){
		alert("Last name is empty").value;
		return false;
		
	}
	
	
	var Country =document.getElementById("dept").value;
	
	
	if(Country==""){
		alert("Country is empty").value;
		return false;
		
	}
	
	
	var Street =document.getElementById("streetaddress").value;
	
	
	if(Street==""){
		alert("Street address is empty").value;
		return false;
		
	}
	
	
	var Zipcode =document.getElementById("zipcode").value;
	
	
	if(Zipcode==""){
		alert("Zipcode is empty").value;
		return false;
		
	}
	
	
	var Phone =document.getElementById("phonenumber").value;
	
	
	if(Phone==""){
		alert("Phone number is empty").value;
		return false;
		
	}
	
	
	var Email =document.getElementById("email").value;
	
	
	if(Email==""){
		alert("Email is empty").value;
		return false;
		
	}
	var Cardnum =document.getElementById("Card_Number").value;
	
	
	if(Cardnum==""){
		alert("Card Number is empty").value;
		return false;
		
	}
	
	
	
	var Card =document.getElementById("Card_Name").value;
	
	
	if(Card==""){
		alert("Cardholder name is empty").value;
		return false;
		
	}
	
	
	
	
	
	var Expirationmonth =document.getElementById("Expiration_month").value;
	
	
	if(Expirationmonth==""){
		alert("Expiration month is empty").value;
		return false;
		
	}
	
	
	var Expirationyear =document.getElementById("Expiration_year").value;
	
	
	if(Expirationyear==""){
		alert("Expiration year is empty").value;
		return false;
		
	}
	
    var CVV =document.getElementById("CVV_Code").value;
	
	
	if(CVV==""){
		alert("CVV code is empty").value;
		return false;
		
	}
	
	
	
	else{
		return true;
	}
  
	 
	
	
}

//start here

function complete() {
	  new Autocompleter.Local(
	    "Expiration_month", //element where user is entering text that needs to be matched
	    "bandlistarea", //element to fill with matches
	    ["January", "February", "March", "April", "May","June","July","August","September","October","November","December"], //array of matches
	    {}
	  );
	  
	  
	  document.getElementById("textchange").onmouseover = changeColor;
	document.getElementById("textchange").onmouseout = changeColor;
document.getElementById("submit").onclick=validate;	
};
