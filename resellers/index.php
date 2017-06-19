<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talking Heads&#8482; -Resellers Order form</title>
    <meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
    <meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
    <meta name="robots" CONTENT="index, follow">
    <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
    <meta name="revisit-after" CONTENT="30 days">
    <meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8="/>
    <meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href="../css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css"/>
    <link href="../css/products.css" rel="stylesheet" type="text/css"/>
    <link href="../css/orderform.css" rel="stylesheet" type="text/css"/>
    <link href="../css/fluid.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include ('../includes/header.php'); ?>
    <h1>Reseller's Order Form</h1>
    <section class="section">
        <div class="container">
            <form action="2mail.php" method="post" name="form1" target="_self" class="reseller-form">
                <p align="center" class="m-25">
                    <input name="Update" type="checkbox" id="Update" value="yes"> Check here if this is an update to an order.</p>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Contact Name</strong>
                        <input name="subject" type="hidden" value="Video Purchase">
                        <input name="recipient" type="hidden" id="recipient" value="sales@websitetalkingheads.com">
                        <input name="redirect" type="hidden" id="redirect" value="ordersubmitted.php">
                    </div>
                    <div class="col-md-8">
                        <input name="nameText" type="text" id="nameText" maxlength="30" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Company Name</strong>
                    </div>
                    <div class="col-md-8">
                        <input name="companyText" type="text" id="companyText" maxlength="30" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>White Label</strong>
                    </div>
                    <div class="col-md-8">
                        <SELECT name="whitelable">
                            <option value="Not White Lable">Not White Lable</option>
                            <option value="White Lable" selected>White Lable</option>
                            <option value="Upload to our FTP">Upload to our FTP</option>
                        </SELECT>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>E-mail Address</strong>
                    </div>
                    <div class="col-md-8">
                        <input name="emailText" type="text" id="emailText" maxlength="40" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Phone Number</strong>
                    </div>
                    <div class="col-md-8">
                        <input name="phoneNumber" type="text" id="phoneNumber" maxlength="40" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Website</strong>
                    </div>
                    <div class="col-md-8">
                        <input name="websiteText" type="text" id="websiteText" maxlength="60" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Type of Video</strong>
                    </div>
                    <div class="col-md-8">
                        <SELECT size="1" name="video">
                            <option value="Not Specified" selected>Please Choose</option>
                            <option value="30 second">30 second (1-90 words)</option>
                            <option value="60 second">60 second (91-180 words)</option>
                            <option value="Longer or multiple videos">Longer or multiple videos</option>
                            <option value="Video Presentation w/Graphics">Video Presentation w/Graphics</option>
                            <option value="File Conversion">File Conversion</option>
                        </SELECT>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-right"><strong>Actor Name</strong>
                    </div>
                    <div class="col-md-8">
                        <label>
                        <input type="text" name="ActorName" id="Actor Name" onKeyDown="if(event.keyCode==13) event.keyCode=9;">
                    </label>
                    





                    </div>
                </div>
                <div class="m-25">
                    <div class="text-center">
                        <h3>Script</h3>
                        <div id="seventyfivepercent">(30 second scripts may not be more than 90 words. 60 second scripts may not be more than 180 words)</div>
                        <textarea class="my-textbox" name="otherTextArea" id="otherTextArea" onKeyDown="if(event.keyCode==13) event.keyCode=9;"></textarea>
                        <div class="clearfix">
                            <a href="http://www.wordcounttool.com" target="_blank" class="text-center">Word Count Tool</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3>Additional comments, requests, and directions.</h3>
                        <div class="clearfix">
                            <textarea name="Comments2" id="Comments2" class="my-textbox" onKeyDown="if(event.keyCode==13) event.keyCode=9;"></textarea>
                            <div id="seventyfivepercent">ATTENTION: Your desired pronuciation of Names, Cities and Industry Terms or Acronyms must be phonetically spelled in this section. Assume Nothing. </div>
                        </div>
                    </div>
                </div>
                <div class="container m-25">
                    <div class="form-body">
                        <div class="row m-25">
                            <div class="col-md-4">
                                <strong>Positioning on website</strong>
                                <div id="seventyfivepercent">** Do not choose custom without providing specific instructions on where to place the video
                                </div>
                            </div>
                            <div class="col-md-8">
                                <select name="Positioning" id="Positioning">
                                    <option value="not specified">Please Choose</option>
                                    <option value="Bottom Left">Bottom Left</option>
                                    <option value="Bottom Right" selected="selected">Bottom Right</option>
                                    <option value="Bottom Center">Bottom Center</option>
                                    <option value="Top Left">Top Left</option>
                                    <option value="Top Right ">Top Right</option>
                                    <option value="Top Center">Top Center</option>
                                    <option value="Left Center">Left Center</option>
                                    <option value="Center">Center</option>
                                    <option value="Right Center">Right Center</option>
                                    <option value="Custom">Custom</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3-offset col-md-6" valign="top"><strong>How the Actor is Shot</strong>
                            </div>
                            <div class="col-md-8">
                                <label>
                            <input type="radio" name="BodyShot" value="Full Body" id="Body Shot_0">
                            Full Body</label>
                            
                                <label>
                            <input type="radio" name="BodyShot" value="Half Body" id="Body Shot_1">
                            Half Body</label>
                            
                                <label>
                            <input type="radio" name="BodyShot" value="3/4 Body" id="Body Shot_2">
                            3/4 Body</label>
                            
                            </div>
                            <div class="row">
                                <strong>Size: </strong>
                                <div id="seventyfivepercent">
                                    <div align="left">Our default size is 256x384 pixels for a full or 3/4 body. Our default size is 320x320 pixels for a half body.</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p>If you require a custom size please enter. If not please leave blank.</p>
                                <p>
                                    <label>Width
                            <input type="text" name="Width" id="Width">
                        </label>
                                    <br>
                                    <label>Height
                            <input type="text" name="Height" id="Height">
                        </label>
                                </p>
                            </div>
                            <div class="row p-10">
                                <div class="col-md-4 text-right"><strong>Autostart</strong><br/>
                                    <span class="seventyfivepercent">Determines how the player starts playing the video.</span>
                                </div>
                                <div class="col-md-8">
                                </div>
                                <div class="row p-10">
                                    <div class="col-md-4 text-right"><strong>Entry</strong><br/>
                                        <span class="seventyfivepercent">Determines how the spokesperson enters the page.</span>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="Appearance" id="Appearance">
                                            <option value="not specified" selected>Please Choose</option>
                                            <option value="Walk in from left">Walk in from left side of screen</option>
                                            <option value="Walk in from right">Walk in from right side of screen</option>
                                            <option value="Standing">Standing</option>
                                            <option value="Walking forward">Walking forward</option>
                                            <option value="Custom">Custom - Please specifit in comments below</option>
                                        </select>
                                    </div>





                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-right">
                                    <div align="left"><strong>Preferred wardrobe </strong>
                                    </div>
                                    <div id="seventyfivepercent">
                                        <div align="left">(<em>business, casual, color preference, etc</em>.) Clothing choice limited to actor's wardrobe.</div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label>
                            <textarea name="Wardrobe" cols="45" rows="5" id="Wardrobe" onKeyDown="if(event.keyCode==13) event.keyCode=9;"></textarea>
                        </label>
                                





                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-right"><strong>Once per browser session*</strong>
                                </div>
                                <div class="col-md-8">
                                    <label>
                            <select name="OncePerSession" id="Once Per Session">
                                <option value="Play every time" selected>Play every time.</option>
                                <option value="Click to Play">Click to Play</option>
                                <option value="Mute Click to Play">Mute Click to Play</option>
                                <option value="Once Per Session">Once per session.</option>
                                <option value="Once then Mute">Once then Mute.</option>
                                <option value="Once then Image">Once then Image.</option>
                                <option value="Once Only">Once Only</option>
                            </select>
                        </label>
                                




                                    <div id="seventyfivepercent">*Once Per Session means that a video will play once and not play again until the user closes and restarts the browser.</div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-right"><strong>Preferred completion date</strong>
                                </div>
                                <div class="col-md-8">
                                    <label>
                            <input name="CompletionDate" type="text" id="Completion Date" onKeyDown="if(event.keyCode==13) event.keyCode=9;" value="5 working days">
                        </label>
                                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container m-25">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-4">
                            <label><a href="../terms.php" target="_blank" class="text-center">I agree to the Terms and Conditions.</a>
                                <input type="checkbox" name="I Agree" id="I Agree">
                        </label>
                        </div>
                    </div>
                </div>
                <div class="m-25">
                    <input class="center-block" type="submit" name="submit" id="submit" value="Submit">
                    <div class="text-center text-warning">By Clicking Submit you agree to all Terms and Conditions.</div>
                </div>
        </div>
        </form>
        </div>
    </section>
    <div class="container-fluid m-25 alert-danger p-25">
        <div class="container p-25">
            <p class="text-center">Any changes needed to your original request (including script changes) must be made by filling out this form again no less than 6 hours prior to the shoot. Please add the word UPDATE to the &quot;Additional Comments or Requests&quot; field.</p>
        </div>
    </div>
    <?php include ('../includes/footer.php'); ?>
</body>

</html>