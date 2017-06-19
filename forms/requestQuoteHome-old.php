<?php
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
?>
<section title="Request a Quote">
    <form class="form-horizontal contactform" id="__vtigerWebForm" name="WTHTest" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <fieldset>
        <input type="hidden" name="__vtrftk" value="sid:487e9e3c85bd2aac8da52602ee282da93d1a32ce,1435603976">
        <input type="hidden" name="publicid" value="ef97517204418e2e295e1a80b22c72e0">
        <input type="hidden" name="urlencodeenable" value="1">
        <input type="hidden" name="name" value="Contact Form">
        <input type="hidden" name="cf_999" value="<?=$pageURL?>">
<!-- Form Name -->
  <legend><h2>Request a Quote</h2></legend>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="name">Name</label>
        <div class="col-md-9">
          <input name="lastname" class="form-control input-md" id="lastname" type="text" placeholder="Your Name">
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="company">Company</label>
        <div class="col-md-9">
          <input name="company" class="form-control input-md" id="company" type="text" placeholder="Company">
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="email">Email</label>
        <div class="col-md-9">
          <input name="email" class="form-control input-md" id="email" type="text" placeholder="your email">
        </div>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="phone">Phone</label>
        <div class="col-md-9">
          <input name="phone" class="form-control input-md" id="phone" type="text" placeholder="Phone">
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-3 control-label" for="description">Message</label>
        <div class="col-md-9">
          <textarea name="description" class="form-control" id="description" ></textarea>
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <button name="submit" class="btn btn-primary" id="submit" onclick="return validate();">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
</section>
