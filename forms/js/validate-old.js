// JavaScript Document

function validate()
{
var r = true;

var message = "";
var cn=document.contactform.name.value; 
var searchStrings = ["blog", "ugg", "jersey","http", "channel", "vuitton", "Ÿ", "ã"];
for (i = 0; i < searchStrings.length; i++) { 
    var n = cn.search(searchStrings[i]);
	if(n>-1){
		r=false;
		message += "You have used a word that spammer use.\n";
		message += "Please enter Valid name.\n";
	}
}
if (cn == "" || cn=="null"  || cn =="Name"||  cn.length < 4 ) {
      r=false;
	  message += "Your Name.\n";
   	  document.contactform.name.style.outline = "solid red";
    } else {
	   document.contactform.name.style.outline = "none";
   }

//validate company
var company = document.contactform.company.value; 
for (i = 0; i < searchStrings.length; i++) { 
    var n = company.search(searchStrings[i]);
	if(n>-1){
		r=false;
		message += "You have used a word that spammer use.\n";
		message += "Please enter Valid company name.\n";
	}
}
//validate email and phone
var validateEmail = true;
var x=document.contactform.email.value;

var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {
   validateEmail=false;
   document.contactform.email.style.outline = "solid red";
  }else {
	   document.contactform.email.style.outline = "none";
   }

var validatePhone = true;
var phoneNumber = document.contactform.phone.value; 
  if (phoneNumber == ""  ||  phoneNumber == "Phone"|| phoneNumber == "123456"  || phoneNumber.length<10 || phoneNumber == "XXX-XXX-XXXX") {
		document.contactform.phone.style.outline = "solid red";
		document.contactform.phone.value = "";
     validatePhone = false;
   }else{
		document.contactform.phone.style.outline = "none";
}

//phone and email test
if(validatePhone == false && validateEmail == false){
	message +="A valid email address or phone number.\n";
      r=false;
}

//theMessage test
var searchStrings = ["blog", "ugg", "jerseys","channel", "vuitton"];
var ms=document.contactform.theMessage.value; 
for (i = 0; i < searchStrings.length; i++) { 
    var n = ms.search(searchStrings[i]);
	if(n>-1){
		r=false;
		message += "You have used a word that spammer use.\n";
		message += "Please enter Valid message.\n";
	}
}


//Final test
if (r==false){
	var messageIntro= "";
	messageIntro+= "We would like to contact you.\n";
	messageIntro+= "Please provide the following information.\n";
	var fullMessage = messageIntro + message;
	alert(fullMessage);
	return false;
	}else{
		document.getElementById('formMessage').innerHTML = "Thank You for Submitting the Form.";
	return true;
	}
}



 