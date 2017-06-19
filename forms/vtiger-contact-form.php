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
<section class="vtigerContact center-block">
<h2 class="pageinfo">Contact Website Talking Heads</h2>
    <form class="form-horizontal contactform" id="__vtigerWebForm" name="WTHTest" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <fieldset>
        <input type="hidden" name="__vtrftk" value="sid:487e9e3c85bd2aac8da52602ee282da93d1a32ce,1435603976">
        <input type="hidden" name="publicid" value="ef97517204418e2e295e1a80b22c72e0">
        <input type="hidden" name="urlencodeenable" value="1">
        <input type="hidden" name="name" value="Contact Form">
        <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
        
        <!-- Form Name -->
        <legend>
        <h2>Contact Us</h2>
        </legend>
        
        <!-- Text input-->
        <div class="form-group-vtiger">
          <label class="vtiger-label" for="lastname">Name</label>
          <input name="lastname" data-label="Last Name" class="vtiger-input vtiger-textrow" id="lastname" type="text" placeholder="Your Name">
        </div>
        
        <!-- Text input-->
        <div class="form-group-vtiger">
          <label class="vtiger-label">Company</label>
          <input class="vtiger-input vtiger-textrow" type="text" name="company" data-label="Company" value="">
        </div>
        <!-- Text input-->
        <div class="form-group-vtiger">
          <label class="vtiger-label" for="email">Email</label>
          <input name="email"  data-label="Email" class="vtiger-input vtiger-textrow" id="email" required="" type="text" placeholder="Your Email">
        </div>
        
        <!-- Text input-->
        <div class="form-group-vtiger">
          <label class="vtiger-label" for="phone">Phone</label>
          <input type="text" name="phone" data-label="Phone" class="vtiger-input vtiger-textrow"  value="">
        </div>
        
        <!-- Textarea -->
        <div class="form-group-vtiger">
          <label class="vtiger-label description" for="description">Message</label>
          <textarea name="description" class="vtiger-input vtiger-textarea" id="description"></textarea>
        </div>
        <!-- Button -->
        <div class="form-group-vtiger">
          <div class="row center-block" align="center">
            <button name="submit"  class="btn btn-primary" id="submit">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
</section>
<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("data-label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("data-label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("data-label");var elelgataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elelgataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var currencyFieldInputs = document.querySelectorAll("input[datatype='currency']");for (var i = 0; i < currencyFieldInputs.length; i++) { val = currencyFieldInputs[i].value;var elemLabel = currencyFieldInputs[i].getAttribute("data-label");if(val != "") {var numRegex = /^[+-]?\d+(,\d+)*(\.\d+)?$/;if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid currency value"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("data-label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}}; }</script>
</body></html>