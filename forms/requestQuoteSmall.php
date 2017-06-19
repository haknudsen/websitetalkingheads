<script type="text/javascript" src="
https://www.websitetalkingheads.com/forms/js/validate.js"></script>
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "http://websitetalkingheads.com/images/submit_hover.png";
}
</script>
<link href="
https://www.websitetalkingheads.com/css/smallContactForm.css" rel="stylesheet" type="text/css">


<div class="smallContact">
<form name="contactform" id="contactForm" action="sx
https://www.websitetalkingheads.com/forms/getInfoSendMail.php" method="post" class="formRequest" >
<div id ="formtoptext">Request a Quote</div>
<div class="inputFields">
       <span class="formLabel">Name</span>
       <input type="text" onblur="if(this.value=='') {this.value='Name';}" onfocus="if(this.value=='Name') {this.value='';}"  id="name" name="name" value="Name" size="18"><br />
       <div id="c"></div>
          <span class="formLabel">Company</span>
      <input type="text"  onblur="if(this.value=='') {this.value='Company';}" onfocus="if(this.value=='Company') {this.value='';}" id="company"  name="company" value="Company" size="18"><br />
      <div id="c"></div>
         <span class="formLabel">Email</span>
      <input type="text" onblur="if(this.value=='') {this.value='Email';}" onfocus="if(this.value=='Email') {this.value='';}" id="email"  name="email" value="Email" size="18"><br />
      <div id="c"></div>
    <span class="formLabel">Phone</span>
      <input type="text"  onblur="if(this.value=='') {this.value='Phone';}" onfocus="if(this.value=='Phone') {this.value='';}" id="phone"  name="phone" value="Phone" size="18"><br />
      <div id="c"></div>

         <div class="formLabelCentered">Message</div>
         <div align="center">
             <textarea onblur="if(this.value=='') {this.value='Message';}" onfocus="if(this.value=='Message') {this.value='';}" id="theMessage" name="theMessage"><?=$currentsite?>
             </textarea>
         </div>
</div>
<div id="c"></div>
<div id="formMessage">test</div>
    <div id="formSubmit"><input name="submit" type="submit" class="formSubmit" id="submit" onclick="return validate();" value=""></div>
    
</form>   
</div>