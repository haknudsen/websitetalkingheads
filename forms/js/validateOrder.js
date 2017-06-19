// JavaScript Document

function validate()
{
var r = true;
var message = "";
var cn=document.orderForm.nameText.value; 
if (cn == "" || cn=="null"  || cn =="Name"||  cn.length < 4 ) {
      r=false;
	  message += "Your Name.\n";
   	  document.orderForm.nameText.style.outline = "solid red";
    } else {
	   document.orderForm.nameText.style.outline = "none";
   }


//validate email and phone
var validateEmail = true;
var x=document.orderForm.emailText.value;

var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {
   validateEmail=false;
   document.orderForm.emailText.style.outline = "solid red";
  }else {
	   document.orderForm.emailText.style.outline = "none";
   }

var validatePhone = true;
var phoneNumber = document.orderForm.phoneNumber.value; 
  if (phoneNumber == ""  ||  phoneNumber == "Phone"|| phoneNumber == "123456"  || phoneNumber.length<10) {
		document.orderForm.phoneNumber.style.outline = "solid red";
		document.orderForm.phoneNumber.value = "";
     validatePhone = false;
   }else{
		document.orderForm.phoneNumber.style.outline = "none";
}

//phone and email test
if(validatePhone == false && validateEmail == false){
	message +="A valid email address or phone number.\n";
      r=false;
}
 	var termsMet =document.getElementById("termsCheckbox").checked;
	if(termsMet){
				document.getElementById("termsCheckbox").style.outline = "none";
	}else{
				message +="You must accept our terms and conditions.\n";
				r=false;
				document.getElementById("termsCheckbox").style.outline = "solid red";
	}  
//Final test
if (r==false){
	var messageIntro= "";
	messageIntro+= "We would like to take your order you.\n";
	messageIntro+= "Please provide the following information.\n";
	var fullMessage = messageIntro + message;
	alert(fullMessage);
	return false;
	}else{
		document.getElementById('formMessage').innerHTML = "Thank You for Submitting your Order.";
	return true;
	}
}



 