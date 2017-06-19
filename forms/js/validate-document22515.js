// JavaScript Document

function validate()
{
var r = true;
var message = "";
var cn=document.getElementById("name").value; 
if (cn == "" || cn=="null"  || cn =="Name"||  cn.length < 4 ) {
      r=false;
	  message += "Your Name.\n";
   	  document.getElementById("name").style.outline = "solid red";
    } else {
	   document.getElementById("name").style.outline = "none";
   }


//validate email and phone
var validateEmail = true;
var x=document.getElementById("email").value;

var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {
   validateEmail=false;
   document.getElementById("email").style.outline = "solid red";
  }else {
	   document.getElementById("email").style.outline = "none";
   }

var validatePhone = true;
var phoneNumber = document.getElementById("phone").value; 
  if (phoneNumber == ""  ||  phoneNumber == "Phone"|| phoneNumber == "123456"  || phoneNumber.length<10) {
		document.getElementById("phone").style.outline = "solid red";
		document.getElementById("phone").value = "";
     validatePhone = false;
   }else{
		document.getElementById("phone").style.outline = "none";
}

//phone and email test
if(validatePhone == false && validateEmail == false){
	message +="A valid email address or phone number.\n";
      r=false;
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



 