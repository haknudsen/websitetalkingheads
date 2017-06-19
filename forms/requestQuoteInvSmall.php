<script type="text/javascript" src="
https://www.websitetalkingheads.com/forms/js/validate.js"></script>
<link href="http://websitetalkingheads.com/css/smallInvContactForm.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "http://websitetalkingheads.com/images/submit_hover.png";
}
</script>

<div class="smallContact">
<form name="contactform" id="contactForm" action="
https://www.websitetalkingheads.com/forms/getInfoSendMail.php" method="post" class="formRequest" >
<div id ="formtoptext">Request a Quote</div>
<div class="inputFields">
       <span class="formLabel">Name</span>
       <input type="text" onblur="if(this.value=='') {this.value='Name';}" onfocus="if(this.value=='Name') {this.value='';}"  id="name" name="name" value="Name" size="18"><br />
       <div class="c"></div>
          <span class="formLabel">Company</span>
      <input type="text"  onblur="if(this.value=='') {this.value='Company';}" onfocus="if(this.value=='Company') {this.value='';}" id="company"  name="company" value="Company" size="18"><br />
      <div class="c"></div>
         <span class="formLabel">Email</span>
      <input type="text" onblur="if(this.value=='') {this.value='Email';}" onfocus="if(this.value=='Email') {this.value='';}" id="email"  name="email" value="Email" size="18"><br />
      <div class="c"></div>
    <span class="formLabel">Phone</span>
      <input type="text"  onblur="if(this.value=='') {this.value='Phone';}" onfocus="if(this.value=='Phone') {this.value='';}" id="phone"  name="phone" value="Phone" size="18"><br />
<div class="c"></div>
         <span class="formLabelCentered">Message</span><br />
     <textarea onblur="if(this.value=='') {this.value='Message';}" onfocus="if(this.value=='Message') {this.value='';}" id="theMessage" name="theMessage" cols="26" rows="3"><?=$currentsite?></textarea>
</div>

<div id="formMessage"></div>
    <div id="formSubmit"><input name="submit" type="submit" class="formSubmit" id="submit" onclick="return validate();" value=""></div>
    
</form>   
</div>