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

<section title="Request a Quote" class="text-center">
  <h2 class="pageinfo">Contact Website Talking Heads</h2>
  <form class="form-horizontal contactform" id="__vtigerWebForm" name="Website Spokesperson Contact" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="hidden" name="__vtrftk" value="sid:0c2502be5f0cb59bddb121bef77a272f3d1a9b6f,1455941855">
    <fieldset style="padding:10px 10px 0">
      <input type="hidden" name="publicid" value="91676e440e7c4b55d8006ddc8ab0059f">
      <input type="hidden" name="urlencodeenable" value="1">
      <input type="hidden" name="name" value="Website Spokesperson Contact">
      <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
      <legend><h5 class="text-center">Request a Quote</h5></legend>
      
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
        <div class="col-md-12">
        <center>
          <button name="submit" class="btn btn-primary" id="submit" onclick="return validate();">Submit</button>
          </center>
        </div>
      </div>
    </fieldset>
  </form>
</section>
<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}}; }</script>