
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section id="container">
<h2 class="hidden">Contact US</h2>
  <div class="formContent">
    <form name="contactform" class="form-horizontal" action="
https://www.websitetalkingheads.com/forms/getInfoSendMailCaptcha.php" method="post">
      <fieldset>
        
        <!-- Form Name -->
        <legend><h2>Contact US</h2></legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lastname">Name</label>
          <div class="col-md-6">
            <input name="lastname" class="form-control input-md" id="lastname" type="text" placeholder="Your Name">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="company">Company</label>
          <div class="col-md-6">
            <input name="company" class="form-control input-md" id="company" type="text" placeholder="">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>
          <div class="col-md-6">
            <input name="email" class="form-control input-md" id="email" type="text" placeholder="email@email.com">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Phone">Phone</label>
          <div class="col-md-6">
            <input name="phone" class="form-control input-md" id="phone" type="text" placeholder="xxx-xxx-xxxx">
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Message</label>
          <div class="col-md-6">
            <textarea name="description" class="form-control" id="description" placeholder="Message"></textarea>
          </div>
        </div>
        
        <!-- Captcha -->
        <div class="form-group">
        <div class="center-block" style="width:304px">
          <div class="g-recaptcha" data-sitekey="6Lf3qw4TAAAAAAIO861UoBcvmB3I7RaXmzC_q8uR"></div>
          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button name="submit" class="btn btn-primary" id="submit" onclick="return validate();">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</section>
