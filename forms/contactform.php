<?php
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
    if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
        $sentIP = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
    } else {
        $sentIP = $_SERVER[ 'REMOTE_ADDR' ];
    }
?> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="form-horizontal contactform">
    <form name="contactform" class="form-horizontal" action="https://www.websitetalkingheads.com/forms/getInfoSendMailCaptcha.php" method="post">
      <fieldset>
             <input name="designation" type="hidden" value="<?=$sentIP?>" >    
        
        <!-- Form Name -->
        <legend>
        <h2>Contact Us</h2>
        </legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lastname">Name</label>
          <div class="col-md-8">
            <input name="lastname" class="form-control input-md" id="lastname" type="text" required placeholder="Your Name">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>
          <div class="col-md-8">
            <input name="email" class="form-control input-md" id="email" type="text" placeholder="email@email.com">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone">Phone</label>
          <div class="col-md-8">
            <input name="phone" class="form-control input-md" id="phone" type="text" placeholder="xxx-xxx-xxxx">
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Message</label>
          <div class="col-md-8">
            <textarea name="description" class="form-control" id="description" placeholder="Message"></textarea>
          </div>
        </div>
        
        <!-- Captcha -->
        <div class="center-block" style="width:304px">
          <div class="g-recaptcha" data-sitekey="6Lf3qw4TAAAAAAIO861UoBcvmB3I7RaXmzC_q8uR"></div>
          </div>
        <!-- Button -->
        <div class="form-group">
          <div class="col-md-12">
            <button name="submit" class="btn btn-primary center-block" id="submit" onclick="return validate();">Submit</button>
          </div>
        </div>
        <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
      </fieldset>
    </form>
  </div>
<script>
function validate()
{
var r = true;

var message = "";
var str=document.contactform.lastname.value; 
var cn = str.toLowerCase();
var searchStrings = ["blog", "ugg", "jersey","http", "channel", "vuitton", "Ÿ", "ã", "sina", "outlet", ".asp", "¥", "url", "lululemon"];
for (i = 0; i < searchStrings.length; i++) { 
    var n = cn.search(searchStrings[i]);
	if(n>-1){
		r=false;
		message += "Please enter Valid name.\n";
	}
}
if (cn == "" || cn=="null"  || cn =="Name" ) {
      r=false;
	  message += "Your Name.\n";
   	  document.contactform.lastname.style.outline = "solid red";
    } else {
	   document.contactform.lastname.style.outline = "none";
   }
//validate email and phone
var validateEmail = true;
var x=document.contactform.email.value;
var emailS = x.toLowerCase();
var n = emailS.search("sina");
	if(n>-1){
		r=false;
		message += "Please enter Valid email address.\n";
	}

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
  if (phoneNumber == ""  ||  phoneNumber == "Phone"|| phoneNumber == "123456"  || phoneNumber.length>14   || phoneNumber.length<10 || phoneNumber == "XXX-XXX-XXXX") {
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
var searchStrings = ["ugg", "jersey", "channel", "vuitton", "Ÿ", "ã", "sina"];
var messageValue =document.contactform.theMessage.value; 
var ms = messageValue.toLowerCase();
for (i = 0; i < searchStrings.length; i++) { 
    var n = ms.search(searchStrings[i]);
	if(n>-1){
		r=false;
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
		document.getElementById('formMessage').innerHTML = "Your Message has been sent.";
		document.getElementById('formMessage').style.visibility = "visible";
	return true;
	}
}
</script>




 
