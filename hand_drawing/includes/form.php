<h1>Get A Quote!</h1>
<?php
$pageURL = 'http';
if ( array_key_exists( 'HTTPS', $_SERVER ) && $_SERVER[ "HTTPS" ] == "on" ) {
    $pageURL .= "s";
}
$pageURL .= "://";
if ( $_SERVER[ "SERVER_PORT" ] != "80" ) {
    $pageURL .= $_SERVER[ "SERVER_NAME" ] . ":" . $_SERVER[ "SERVER_PORT" ] . $_SERVER[ "REQUEST_URI" ];
} else {
    $pageURL .= $_SERVER[ "SERVER_NAME" ] . $_SERVER[ "REQUEST_URI" ];
}
?>
<div class="formbox">
    <form class="contactform center-block" id="__vtigerWebForm" name="whiteboard leads" action="../../forms/getInfoWhiteboard.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="cf_1001" value="<?=$pageURL?>">
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-12">
                    <input name="lastname" class="form-control input-md" id="lastname" type="text" placeholder="Name">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-12">
                    <input name="email" class="form-control input-md" id="email" type="text" placeholder="Your email">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-12">
                    <input name="phone" class="form-control input-md" id="phone" type="text" placeholder="Contact Phone">
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <div class="col-md-12">
                    <textarea name="description" class="form-control" id="description" placeholder="Your Message" maxlength="900"></textarea>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <div class="col-md-12 center-block">
                    <button name="submit" class="btn btn-custom" id="submit"><h2 class="need-video">I Need Video!</h2></button>
                </div>
            </div>
        </fieldset>
    </form>
</div>