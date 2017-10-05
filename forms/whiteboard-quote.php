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
if ( isset( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) && $_SERVER[ 'HTTP_X_FORWARTDED_FOR' ] != '' ) {
    $sentIP = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
} else {
    $sentIP = $_SERVER[ 'REMOTE_ADDR' ];
}
?>
<h1>Get A Quote!</h1>
<div class="formbox">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form name="Whiteboard Captcha" id="__vtigerWebForm" action="https://websitetalkingheads.od1.vtiger.com/modules/Webforms/capture.php" enctype="multipart/form-data" method="post" accept-charset="utf-8"><input name="__vtrftk" type="hidden" value="sid:7c1d14333a07bcc7bcdc42c338459d085a8bc4f4,1507230926">
    <input name="publicid" type="hidden" value="e3342afbff2983a5148df30f6d7dbe5b">
    <input name="urlencodeenable" type="hidden" value="1">
    <input name="name" type="hidden" value="Whiteboard Captcha">
    <input name="__vtCurrency" type="hidden" value="1">
        <table>
            <tbody>
                <tr>
                    <td class="vtiger-lable"><label>Name*</label>
                    </td>
                    <td><input name="lastname" required="" type="text" value="" data-label="">
                    </td>
                </tr>
                <tr>
                    <td class="vtiger-lable"><label>Email*</label>
                    </td>
                    <td><input name="email" required="" type="email" value="" data-label="">
                    </td>
                </tr>
                <tr>
                    <td class="vtiger-lable"><label>Phone*&nbsp;</label>
                    </td>
                    <td><input name="phone" required="" type="text" value="" data-label="">
                    </td>
                </tr>
                <tr>
                    <td class="vtiger-lable"><label>Message</label>
                    </td>
                    <td><textarea name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input name="designation" type="hidden" value="<?=$sentIP?>" data-label="">
                    </td>
                </tr>
                <tr>
                    <td><input name="cf_1001" type="hidden" value="<?=$pageURL?>" data-label="">
                    </td>
                </tr>
            </tbody>
        </table>
        <button name="submit" class="btn btn-custom" id="submit"><h2 class="need-video">I Need Video!</h2></button>
    </form>
<script type="text/javascript">
    window.onload = function () {
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
            document.getElementById( "vtigerFormSubmitBtn" ).disabled = true;
            var required = [],
                att, val;
            var startDate;
            var endDate;
            for ( var i = 0; i < inputs.length; i++ ) {
                att = inputs[ i ].getAttribute( "required" );
                val = inputs[ i ].value;
                type = inputs[ i ].type;
                if ( inputs[ i ].name == "birthday" ) {
                    birthdayDate = new Date( inputs[ i ].value );
                    todayDate = new Date();
                    todayDate.setHours( 0, 0, 0, 0 );
                    birthdayDate.setHours( 0, 0, 0, 0 );
                    if ( birthdayDate >= todayDate ) {
                        alert( "Date of Birth should be less than Today's Date." );
                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                        return false;
                    }
                }
                if ( inputs[ i ].name == "support_start_date" ) {
                    startDate = inputs[ i ].value;
                }
                if ( inputs[ i ].name == "support_end_date" ) {
                    endDate = inputs[ i ].value;
                }
                if ( type == "email" ) {
                    if ( val != "" ) {
                        var elemLabel = inputs[ i ].getAttribute( "label" );
                        var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;
                        var illegalChars = /[\(\)\<\>\,\;\:\"\[\]]/;
                        if ( !emailFilter.test( val ) ) {
                            alert( "For " + elemLabel + " field please enter valid email address" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        } else if ( val.match( illegalChars ) ) {
                            alert( elemLabel + " field contains illegal characters" );
                            document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                            return false;
                        }
                    }
                }
                if ( startDate && typeof startDate !== "undefined" ) {
                    if ( endDate && typeof endDate !== "undefined" ) {
                        startDate = new Date( startDate );
                        endDate = new Date( endDate );
                        if ( endDate < startDate ) {
                            alert( "Support End Date should be greater than or equal to Support Start Date" );
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
            if ( required.length > 0 ) {
                alert( "The following fields are required: " + required.join() );
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                return false;
            }
            var numberTypeInputs = document.querySelectorAll( "input[type=number]" );
            for ( var i = 0; i < numberTypeInputs.length; i++ ) {
                val = numberTypeInputs[ i ].value;
                var elemLabel = numberTypeInputs[ i ].getAttribute( "label" );
                var elemDataType = numberTypeInputs[ i ].getAttribute( "datatype" );
                if ( val != "" ) {
                    if ( elemDataType == "double" ) {
                        var numRegex = /^[+-]?\d+(\.\d+)?$/;
                    } else {
                        var numRegex = /^[+-]?\d+$/;
                    }
                    if ( !numRegex.test( val ) ) {
                        alert( "For " + elemLabel + " field please enter valid number" );
                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                        return false;
                    }
                }
            }
            var dateTypeInputs = document.querySelectorAll( "input[type=date]" );
            for ( var i = 0; i < dateTypeInputs.length; i++ ) {
                dateVal = dateTypeInputs[ i ].value;
                var elemLabel = dateTypeInputs[ i ].getAttribute( "label" );
                if ( dateVal != "" ) {
                    var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;
                    if ( !dateRegex.test( dateVal ) ) {
                        alert( "For " + elemLabel + " field please enter valid date in required format" );
                        document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                        return false;
                    }
                }
            }
            var inputElems = document.getElementsByTagName( "input" );
            var totalFileSize = 0;
            for ( var i = 0; i < inputElems.length; i++ ) {
                if ( inputElems[ i ].type.toLowerCase() === "file" ) {
                    var file = inputElems[ i ].files[ 0 ];
                    if ( typeof file !== "undefined" ) {
                        var totalFileSize = totalFileSize + file.size;
                    }
                }
            }
            if ( totalFileSize > 52428800 ) {
                alert( "Maximum allowed file size including all files is 50MB." );
                document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                return false;
            }
            var inputElem = document.querySelectorAll( "input[type=file]" );
            var fileSize = 0;
            for ( var i = 0; i < inputElem.length; i++ ) {
                if ( inputElem[ i ].type.toLowerCase() === "file" ) {
                    if ( inputElem[ i ].hasAttribute( "selectedTypeImage" ) ) {
                        var imageFile = inputElem[ i ].files[ 0 ];
                        var fileSize = imageFile.size;
                    }
                }
                if ( fileSize > 5242880 ) {
                    alert( "Maximum allowed image size is 5MB." );
                    document.getElementById( "vtigerFormSubmitBtn" ).disabled = false;
                    return false;
                }
            }
        };
    }
</script>
</div>