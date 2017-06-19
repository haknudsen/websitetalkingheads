<script type="text/javascript" src="
https://www.websitetalkingheads.com/forms/js/validate.js"></script>
<link href="
https://www.websitetalkingheads.com/css/contact.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "http://websitetalkingheads.com/images/submit_hover.png";
}
</script>
<script src="http://websitetalkingheads.com/forms/js/dropzone.js"></script>
<form name="contactform" id="contactForm" action="
https://www.websitetalkingheads.com/forms/getInfoSendMail.php" method="post" class="form2" >
    <div class="formContent">
        <div id ="formtoptext">Audiologist</div>
        <div id="formLeft"> 
        	<div class="formLabel">Name</div>
            <input type="text" onblur="if(this.value=='') {this.value='Name';}" onfocus="if(this.value=='Name') {this.value='';}"  id="name" name="name" value="Name" size="30">
            <br />
            <span class="formLabel">Company</span>
            <input type="text"  onblur="if(this.value=='') {this.value='Company';}" onfocus="if(this.value=='Company') {this.value='';}" id="company"  name="company" value="Company" size="30">
            <br />
            <span class="formLabel">Website</span>
            <input type="text" onblur="if(this.value=='') {this.value='Email';}" onfocus="if(this.value=='Email') {this.value='';}" id="email"  name="email" value="Email" size="30">
            <br />
            <span class="formLabel">Phone</span>
            <input type="text"  onblur="if(this.value=='') {this.value='Phone';}" onfocus="if(this.value=='Phone') {this.value='';}" id="phone"  name="phone" value="Phone" size="30">
        </div>
        <div id="formRight"> 
        <p>
        </p>
        <div id="formMessage"></div>
        </div>
        <div class="c"></div>
    </div>
    <div id="formSubmit">
        <input name="submit" type="submit" class="formSubmit" id="submit" onclick="return validate();" value="">
    </div>
</form>
