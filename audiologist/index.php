<html>
<head>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../videopresentations/VideoBox/js/mootools.js"></script>
<script type="text/javascript" src="../videopresentations/VideoBox/js/swfobject.js"></script>
<script type="text/javascript" src="../videopresentations/VideoBox/js/videobox.js"></script>
<link media="screen" type="text/css" rel="stylesheet" href="../videopresentations/VideoBox/css/videobox.css" />
<script src="js/dropzone.min.js"></script>
<script src="//use.typekit.net/jsy1pha.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="../audiologist/js/validate.js"></script>
<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "images/submit.png";
}
</script>
</head>
<body>
<?php include ("includes/header.php");?>
<img src="images/submit-hover.png" width="1" height="1" alt="Submit Your Order"/>
<div class="content">
    <div class="loadContent">
        <h1>Audiologist</h1>
        <form name="uploadForm" id="uploadForm" action="../audiologist/getInfoSendMail.php" method="post" class="uploadForm" >
            <span class="formLabel">Name</span>
            <input class="formInput" type="text" onblur="if(this.value=='') {this.value='Name';}" onfocus="if(this.value=='Name') {this.value='';}"  id="name" name="name" value="Name" size="30">
            <br />
            <span class="formLabel">Company</span>
            <input class="formInput" type="text"  onblur="if(this.value=='') {this.value='Company';}" onfocus="if(this.value=='Company') {this.value='';}" id="company"  name="company" value="Company" size="30">
            <br />
            <span class="formLabel">Email</span>
            <input class="formInput" type="text" onblur="if(this.value=='') {this.value='Email';}" onfocus="if(this.value=='Email') {this.value='';}" id="email"  name="email" value="Email" size="30">
            <br />
            <span class="formLabel">Website</span>
            <input class="formInput" type="text" onblur="if(this.value=='') {this.value='Website URL';}" onfocus="if(this.value=='Website URL') {this.value='';}" id="website"  name="website" value="Website URL" size="30">
            <br />
            <span class="formLabel">Phone</span>
            <input class="formInput" type="text"  onblur="if(this.value=='') {this.value='Phone';}" onfocus="if(this.value=='Phone') {this.value='';}" id="phone"  name="phone" value="Phone" size="30">
            <br />
            <span class="formLabel">Widex Rep</span>
            <input class="formInput" type="text"  onblur="if(this.value=='') {this.value='Widex Rep';}" onfocus="if(this.value=='Widex Rep') {this.value='';}" id="WidexRep"  name="WidexRep" value="Widex Rep" size="30">
            <br />
            <span class="formLabel">Rep Phone</span>
            <input class="formInput" type="text"  onblur="if(this.value=='') {this.value='Rep Phone';}" onfocus="if(this.value=='Rep Phone') {this.value='';}" id="RepPhone"  name="RepPhone" value="Rep Phone" size="30">
            <br />
            <div class="c"></div>
            <span class="formLabel">Message</span>
            <textarea  name="Message" id="Message"  type="text"  onblur="if(this.value=='') {this.value='Include Best time to call and other information.';}" onfocus="if(this.value=='Include Best time to call and other information.') {this.value='';}">Include Best time to call and other information.</textarea>
            <div class="c"></div>
            <div class="spacer"></div>
            <h3 id="formMessage">Thank You</h3>
            <div id="formSubmit">
                <input name="submit" type="submit" class="formSubmit" id="submit" onclick="return validate();" value="">
            </div>
        </form>
        <h3>Upload your logo below</h3>
            <div class="spacer"></div>
        <form action="upload.php" class="dropzone">
        </form>
    </div>
    <div class="leftside">
        <div class="videoBox">
            <iframe src="//www.youtube.com/embed/bBtmljosJn0" width="560" height="315" frameborder="0" style="" allowfullscreen></iframe>
        </div>
        <div class="leftbottom">
            <h3>Widex Video Customization Process.</h3>
            <h4 class="tk-swister-regular">Instructions:</h4>
            <ul>
                <li><strong>Step 1.</strong> Fill out the form on the left side of the screen.</li>
                <li><strong>Step 2.</strong> Upload your logo.  Logo must be an image file.  Must be at least 500X500.  (If it is too small it won't look good in the video). Either drag and drop the file in the appropriate area or just Click to browse your files and choose your logo to upload.</li>
                <li><strong>Step 3.</strong> Call us. Or, we will call you within 2-3 business days to confirm the information and pronounciations. And to write the final line of your video. ex. &quot;For a free hearing exam by YOUR NAME call 555-555-5555(please enter best phone number and let your staff know we will be calling you).</li>
            </ul>
            <h3>Video will be delivered within 2 weeks of order. </h3>
        </div>
    </div>
    <div class="c"></div>
    <div class="examples">
        <h2>Custom Whiteboard Examples</h2>
        <?php include("includes/body-whiteboard.php"); ?>
        <h2 class="text-center">See <a href="../whiteboard/index.php">More Examples</a> or <a href="http://www.whiteboard.video/" title="Learn More">learn more here</a>.</h2>
    </div>
</div>
<?php include ("includes/footer.php");?>
</body>
</html>
