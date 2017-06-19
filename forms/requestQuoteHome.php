<?php
$pageURL = 'http';
if ( $_SERVER[ "HTTPS" ] == "on" ) {
    $pageURL .= "s";
}
$pageURL .= "://";
if ( $_SERVER[ "SERVER_PORT" ] != "80" ) {
    $pageURL .= $_SERVER[ "SERVER_NAME" ] . ":" . $_SERVER[ "SERVER_PORT" ] . $_SERVER[ "REQUEST_URI" ];
} else {
    $pageURL .= $_SERVER[ "SERVER_NAME" ] . $_SERVER[ "REQUEST_URI" ];
}
function GetUserIP() { 
if (isset($_SERVER)) { if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) 
{ $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; } 
elseif(isset($_SERVER["HTTP_CLIENT_IP"])) 
{ $ip = $_SERVER["HTTP_CLIENT_IP"]; } 
else { $ip = $_SERVER["REMOTE_ADDR"]; } 
} 
else { if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) 
{ $ip = getenv( 'HTTP_X_FORWARDED_FOR' ); } 
elseif ( getenv( 'HTTP_CLIENT_IP' ) ) 
{ $ip = getenv( 'HTTP_CLIENT_IP' ); } 
else { $ip = getenv( 'REMOTE_ADDR' ); } 
} 
return $ip; 
}
?>
<section title="Request a Quote">
    <form class="form-horizontal contactform" id="__vtigerWebForm" name="ContactMain" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="__vtrftk" value="sid:58dc33a657d1818ec0af068ccc2f060fc704dcf3,1492643997">
            <input type="hidden" name="publicid" value="1fb3a72a3f53b538a8f5379da425c193">
            <input type="hidden" name="urlencodeenable" value="1">
            <input type="hidden" name="name" value="ContactMain">
            <input name="__vtCurrency" type="hidden" value="1">
            <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
            <input type="hidden" name ="company" value="<?=GetUserIP();?>">
            <!-- Form Name -->
            <h2 class="text-center">Request a Quote</h2>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="lastname">Name</label>
                <div class="col-md-9">
                    <input name="lastname" class="form-control input-md" id="lastname" type="text" placeholder="Your Name" required>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="email">Email</label>
                <div class="col-md-9">
                    <input name="email" class="form-control input-md" id="email" type="email" placeholder="your email" required>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="phone">Phone</label>
                <div class="col-md-9">
                    <input name="phone" type="tel" class="form-control input-md" id="phone" placeholder="Phone">
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
                <div class="col-md-4 col-md-offset-4">
                   <div id="submitBtn"></div>
                    
                </div>
            </div>
        </fieldset>
    </form>
      <script>
          document.getElementById('submitBtn').innerHTML = '<button name="submit" class="btn btn-primary center-block" id="vtigerFormSubmitBtn">Submit</button>';
            var N = navigator.appName,
                ua = navigator.userAgent,
                tem;
            var M = ua.match( /(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i );
            if ( M && ( tem = ua.match( /version\/([\.\d]+)/i ) ) != null ) M[ 2 ] = tem[ 1 ];
            M = M ? [ M[ 1 ], M[ 2 ] ] : [ N, navigator.appVersion, "-?" ];
            var browserName = M[ 0 ];
            var form = document.getElementById( "__vtigerWebForm" ),
                inputs = form.elements;
            form.onsubmit = function () {
                console.log( 'start' );
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = true;
                var required = [],
                    name,
                    att, val, type, elemLabel;
                var endDate;
                var startDate;
                for ( var i = 0; i < inputs.length; i++ ) {
                    att = inputs[ i ].getAttribute( "required" );
                    val = inputs[ i ].value;
                    type = inputs[ i ].type;
                    name = inputs[ i ].name;
                    try{
                    if ( name == "lastname" ) {
                        if ( val.length < 4 ) {
                            alert( "name field is too short:" + val.length );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false
                        }
                        if ( val.substr( 0, 2 ) == "58" ) {
                            alert( "name field contains illegal characters" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                        var nameFilter = /^[A-Za-z\s]+$/; 
                        if ( val.match( nameFilter ) ) {
                            console.log( 'name passed' );
                        } else {
                            alert( "name field contains illegal characters" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                    if ( type == "tel" ) {
                        console.log( 'hit' );
                        if ( val.length != 0 ) {
                        if ( val.length < 8 ) {
                            alert( "please enter a valid phone number" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                        var pattern =  /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
                        if ( pattern.test( val ) ) {
                        } else {
                            alert( "phone field contains illegal characters" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                    }
                    if ( type == "email" ) {
                        if ( val != "" ) {
                            var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;
                            var illegalChars = /[\(\)\<\>\,\;\:\"\[\]]/;
                            if ( !emailFilter.test( val ) ) {
                                alert( "For email field please enter valid email address" );
                                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                return false;
                            } else if ( val.match( illegalChars ) ) {
                                alert( "email field contains illegal characters" );
                                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                return false;
                            }
                        }
                    }
                    if ( att != null ) {
                        if ( val.replace( /^\s+|\s+$/g, "" ) == "" ) {
                            required.push( inputs[ i ].getAttribute( "label" ) );
                        }
                    }
                }
                    catch(err){
                                alert( "Sorry form disabled due to spam attack" );
                        console.log(err.message);
                                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                                return false;
                    }
                }
                if ( required.length > 0 ) {
                    alert( "The following fields are required: " + required.join() );
                    document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                    return false;
                }

            };
      </script>
</section>