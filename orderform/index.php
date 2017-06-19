<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Talking Heads Video Order Form</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson, Green Screen, Greenscreen, You Tube Ready">
<meta name="description" content="Order a Video Spokesperson for your website or video project.  We will film your script and provide you with Green Screen Video, a YouTube Ready Video, or a Website Spokesperson.">
<META NAME="robots" CONTENT="index, follow">
<!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="distribution" CONTENT="global">
<META NAME="rating" CONTENT="general">
<META NAME="Content-Language" CONTENT="english">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link href="/css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css" />
<link href="../css/products.css" rel="stylesheet" type="text/css" />
<link href="../css/orderform.css" rel="stylesheet" type="text/css" />
<link href="/css/fluid.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("../includes/header.php"); ?>
<section class="container">
  <h1>Video Order Form</h1>
  <div class="form-version">
    <div class="text-heading"> </div>
  </div>
  <form class="form-horizontal" name="orderForm" id="orderForm" target="_self" method="post" action="getInfoSendMail-Main-Video.php"  >
    <fieldset>
      <!-- Form Name -->
      <legend>
      <h2 class="hidden">Order Your Video Here</h2>
      </legend>
      <section class="section dark boarder">
        <div class="my-container">
          <div class="my-form">
            <div class="control-group">
              <label class="no-padding control-label center-block" for="Video-Type">
              <h2 class="hundred-wide">Select Video Type
                </label>
                <select name="Video-Type" class="input-xxlarge" id="Video-Type">
                  <option>Website Spokesperson</option>
                  <option>Green Screen Video</option>
                  <option>Basic Video</option>
                </select>
              </h2>
            </div>
          </div>
        </div>
        <div class="my-container">
          <div class="row center-block">
            <div class="col-sm-6 my-form"> 
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="name">Name</label>
                <div class="col-sm-8">
                  <input name="name" class="form-control input-md" id="name" type="text" placeholder="Your Name">
                </div>
              </div>
              
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="email"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Please Provide Either Email Address or Phone Number.">E-Mail</a></label>
                <div class="col-sm-8">
                  <input name="email" class="form-control input-md" id="email" type="text" placeholder="yourmail@mail.com">
                </div>
              </div>
              
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="phone"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Please Provide Either Email Address or Phone Number.">Phone</a></label>
                <div class="col-sm-8">
                  <input name="phone" class="form-control input-md" id="phone" type="text" placeholder="XXX-XXX-XXXX">
                </div>
              </div>
              
              <!-- Text input-->
              <div class="form-group">
                <div id="website-field">
                  <label class="col-sm-4 control-label" for="website"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="URL to demo your video on.">Website</a></label>
                  <div class="col-sm-8">
                    <input name="website" class="form-control input-md"  type="text" placeholder="www.mysite.com">
                  </div>
                </div>
              </div>
              
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="ActorName">Spokesperson</label>
                <div class="col-sm-8">
                  <input name="ActorName" class="form-control input-md" id="ActorName" type="text" placeholder="">
                </div>
              </div>
              
              <!-- Textarea -->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="Wardrobe"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Business, Casual, or Business-Casual.  Also color preference, etc. Clothing choice limited to actor's wardrobe.">Wardrobe</a></label>
                <div class="col-sm-8">
                  <textarea name="Wardrobe" class="form-control">Default is Wardrobe from Demo</textarea>
                </div>
              </div>
              
              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="videoLength">Video Length</label>
                <div class="col-sm-8">
                  <select name="videoLength" class="form-control" id="videoLength">
                      <option value="Please Select">Please Select</option>
                    <option value="30 second">30 second (1-90 words)</option>
                    <option value="60 second" selected="selected">60 second (91-180 words)</option>
                    <option value="Featured Actor-30 second">Featured Actor 30 second (1-90 words)</option>
                    <option value="Featured Actor-60 second">Featured Actor 60 second (91-180 words)</option>
                    <option value="Featured Actor-4*30 second">Featured Actor four 30 second (1-90 words)</option>
                    <option value="Featured Actor-10*30 second">Featured Actor ten 30 second (1-90 words each)</option>
                    <option value="Featured Actor-5*60 second">Featured Actor five 60 second (91-180 words each)</option>
                    <option value="More than 360 Words or Multiple">Longer or Multiple</option>
                  </select>
                </div>
              </div>
              
              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="crop"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="How the Actor is Shot">Video Crop</a></label>
                <div class="col-sm-8">
                  <select name="crop" class="form-control" id="crop">
                    <option value="Close Up">Close Up</option>
                    <option value="Half Body" selected="selected">Half Body</option>
                    <option value="Three Quarter">Three Quarter</option>
                    <option value="Full Body">Full Body</option>
                  </select>
                </div>
              </div>
              <div id="website-spokesperson"> 
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="Positioning"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="This is where the video will appear on the page.">Positioning</a></label>
                  <div class="col-sm-8">
                    <select name="Positioning" class="form-control" id="Positioning">
                      <option value="Bottom Left">Bottom Left</option>
                      <option value="Bottom Right" selected="selected">Bottom Right</option>
                      <option value="Bottom Center">Bottom Center</option>
                      <option value="Top Left">Top Left</option>
                      <option value="Top Right">Top Right</option>
                      <option value="Top Center">Top Center</option>
                      <option value="Middle Left">Middle Left</option>
                      <option value="Middle Right">Middle Right</option>
                      <option value="Center">Center</option>
                      <option value="Custom">Custom</option>
                    </select>
                  </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="Appearance"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="This is how the Actor will come onto screen.">Appearance</a></label>
                  <div class="col-sm-8">
                    <select name="Appearance" class="form-control" id="Appearance">
                      <option value="Walk in from left">Walk in from left side of screen</option>
                      <option value="Walk in from right">Walk in from right side of screen</option>
                      <option value="Standing">Standing</option>
                      <option value="Walking forward" selected="selected">Walking forward</option>
                      <option value="Custom">Custom - Please be specific in comments below</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="Autostart"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Autostart features">Autostart</a></label>
                <div class="col-sm-8">
                  <select name="Autostart" class="form-control" id="Autostart">
                    <option value="Autostart">Autostart</option>
                    <option value="Click to Play-Image">Click to Play-Image</option>
                    <option value="Click to Play-Mute">Click to Play-Mute</option>
                    <option value="Once then Image">Once then Image</option>
                    <option value="Once then Mute">Once then Mute</option>
                  </select>
                </div>
              </div>
              
              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="OncePerSession"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="This is how often the video will pay when someone visits the page repeatedly.">Per Session</a></label>
                <div class="col-sm-8">
                  <select name="OncePerSession" class="form-control" id="OncePerSession">
                    <option value="Play Every Time">Play Every Time</option>
                    <option value="Once per Browser Session">Once per Browser Session</option>
                    <option value="Once Only">Once Only</option>
                  </select>
                </div>
              </div>
              
              <!-- Text input-->
              <div class="form-group" id="video-background">
                <label class="col-sm-4 control-label" for="background">Background</label>
                <div class="col-sm-8">
                  <input name="background" class="form-control input-md" id="background" type="text" placeholder="White is default background">
                </div>
              </div>
            </div>
            <!--2nd column-->
            <div class="col-sm-5 my-form col-sm-offset-1"><!-- Textarea -->
              <div class="form-group">
                <div class="col-xs-12">
                  <label class="control-label" for="script"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="The script for your spokesperson to read.">Script</a></label>
                  <textarea name="script" class="form-control" id="script">Place your Script here.</textarea>
                  <div class="wordcount">
                    <input type="button" class="btn btn-info"  onClick="countit()" value="Calculate Words">
                    <input type="text" name="ourWordCount" id="ourWordCount">
                  </div>
                </div>
              </div>
              
              <!-- Textarea -->
              <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label" for="clientInstructions"><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Please Provide Desired Pronunciations of Names, Cities And Industry Terms or Acronyms.">Additional Comments and Instructions:</a></label>
                  <textarea name="clientInstructions" class="form-control" id="clientInstructions">Please Provide Desired Pronunciations of Names, Cities And Industry Terms or Acronyms.</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="my-container">
          <div class="col-xs-2"></div>
          <div class="col-xs-8 center-block my-form">
            <div class="row center-block">
              <div class="center-block">
              <h2><a href="../terms.php">Terms and Conditions</a></h2>
                <div align="center" class="spacer">
                  <input type="checkbox" name="termsCheckbox" id="termsCheckbox" class="my-checkbox">
                <label for="termsCheckbox" class="my-label"><a href="../terms.php">I Accept the Terms and Conditions</a></label>
                </div>
              </div>
            </div>
          <div class="row center-block"> 
            <!-- Button -->
            <div class="form-group center-block">
              <div align="center">
                <input type="submit" class="btn css_btn_class" title="Click to Submit Your Order" tabindex="16" name="submit" id="submit" value="Submit" onclick="return validate();" />
              </div>
            </div>
          </div>
        </div>
        </div>
          </div>
        <div class="row">
          <aside class="col-xs-12 text-center">*Devices that are not transparent compatible will use solid MP4 video fallback</aside>
        </div>
      </section>
    </fieldset>
  </form>
</section>
<?php include ('../includes/footer.php'); ?>
<?php include ('../includes/chatform.php'); ?>
<script type="text/javascript" src="js/video-type.js"></script> 
<script type="text/javascript" src="js/basic-video-validate.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>