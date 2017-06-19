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
<form id="__vtigerWebForm" name="Animation Video Lead" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:236a5b5c0879eaeace6079e264cef1dec3ea68f9,1443580334">
	<input type="hidden" name="publicid" value="9f942915f19a0001a9368c082bebb1a7">
	<input type="hidden" name="urlencodeenable" value="1">
	<input type="hidden" name="name" value="Animation Video Lead">
        <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
						<!-- Text input-->
        <div class="form-group-vtiger">
            <div class="col-md-12">
            <input name="lastname" data-label="Last Name" class="form-control input-md" id="lastname" type="text" placeholder="Your Name">
            </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group-vtiger">
            <div class="col-md-12">
            <input class="form-control input-md" type="text" name="company" data-label="Company" placeholder="Company">
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group-vtiger">
            <div class="col-md-12">
            <input name="email"  data-label="Email" class="form-control input-md" id="email" required="" type="text" placeholder="Your Email">
            </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group-vtiger">
            <div class="col-md-12">
            <input type="text" name="phone" data-label="Phone" class="form-control input-md" placeholder="Your Phone">
            </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group-vtiger">
            <div class="col-md-12">
            <textarea name="description" class="form-control input-md" id="description" placeholder="Your Message"></textarea>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group-vtiger">
            <div class="row center-block" align="center">
                <div class="col-sm-10 col-sm-offset-1">
                    <button name="submit"  class="btn btn-custom" id="submit">I NEED VIDEO</button>
                </div>
            </div>
        </div>
        </fieldset>
</form>
<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");if(val != "") {var intRegex = /^[+-]?\d+$/;if (!intRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}}; }</script>