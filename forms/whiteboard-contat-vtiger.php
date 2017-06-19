<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<form id="__vtigerWebForm" name="whiteboard leads" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:a1105c570bd55a2283df9592cfff26c8904dbab9,1443480850">
	<input type="hidden" name="publicid" value="0b6d70228937303c28f8d526dab8ef97">
	<input type="hidden" name="urlencodeenable" value="1">
	<input type="hidden" name="name" value="whiteboard leads">
						<table>
																																		<tbody><tr>

						<td><label>Last Name*</label></td><td>
																																									<input type="text" name="lastname" data-label="Last Name" value="" required="">				</td></tr>
																														<tr>

						<td><label>Primary Email</label></td><td>
																																					<input type="email" name="email" data-label="Email" value="">				</td></tr>
																														<tr>

						<td><label>Primary Phone</label></td><td>
																																									<input type="text" name="phone" data-label="Phone" value="">				</td></tr>
																														<tr>

						<td><label>Website</label></td><td>
																																									<input type="text" name="website" data-label="Website" value="">				</td></tr>
																														<tr>

						<td><label>Company</label></td><td>
																																									<input type="text" name="company" data-label="Company" value="">				</td></tr>
																														<tr>

						<td><label>Description</label></td><td>
																	<textarea name="description"></textarea>
																		</td></tr>
			</tbody></table>
<input type="submit" value="Submit">
</form>
<script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("data-label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("data-label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("data-label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var currencyFieldInputs = document.querySelectorAll("input[datatype='currency']");for (var i = 0; i < currencyFieldInputs.length; i++) { val = currencyFieldInputs[i].value;var elemLabel = currencyFieldInputs[i].getAttribute("data-label");if(val != "") {var numRegex = /^[+-]?\d+(,\d+)*(\.\d+)?$/;if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid currency value"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("data-label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}}; }</script>