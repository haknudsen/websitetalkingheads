<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <TITLE>Talking Heads&#8482;|Specials</TITLE>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
    <meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
    <meta name="description" content="For as little as $199, add a Website Spokesperson greet visitors to your website.  An online presenter can increase traffic and conversion rates on your website.  We integrate flash and HTML5 to create dynamic streaming video and make it easy to add it your existing website.">
    <META NAME="robots" CONTENT="index, follow">
    <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
    <META NAME="revisit-after" CONTENT="30 days">
    <META NAME="distribution" CONTENT="global">
    <META NAME="rating" CONTENT="general">
    <META NAME="Content-Language" CONTENT="english">
    <meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8="/>
    <meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr"/>
    <meta name="keywords" content="weekly spokesperson special,online spokesperson, video spokesperson, website talking heads, website actor, website video, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
    <meta name="description" content="Talking Heads® Featured Actor Specials. Order One "30 Second" for $199 or Order One "60 Second" for $299.  30 Second=41-90 Words, 60 Second=91-180 Words">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://www.websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://www.websitetalkingheads.com/css/examples.css" rel="stylesheet" type="text/css"/>
    <link href="https://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css"/>
</head>
<?php
$url = 'http://websitetalkingheads.com/featuredactor/featuredactor.xml';
$xml = simplexml_load_file( $url );
$male = $xml->male;
$female = $xml->female;
$newdateBase = $xml->newdate;
$newdate = "THESE OFFERS EXPIRE Friday, " . $newdateBase;
?>

<body>
    <?php include ('../includes/header.php'); ?>
    <section class="page-header">
        <h1>Talking Heads<sup class="tm-small">&reg;</sup></h1>
        <h2>Featured Actor Specials</h2>
        <h3 id="SpecialTop">
            <?=$newdate?>
        </h3>
    </section>
    <section class="container center-block">
        <div id="row center-block">
            <div class="col-md-4 videoHolder">
                <iframe style="margin: 0 auto" src="https://www.websitetalkingheads.com/specials/male.php?name=<?=$male?>" frameborder="0" width="320" height="320" scrolling="No" id="MaleSpokesperson" name="MaleSpokesperson"></iframe>
                <h3>
                    <div id="male">
                        <?=$male?>
                    </div>
                </h3>
            </div>
            <div class="col-md-4 textHolder">
                <h3>NO HIDDEN FEES</h3>
                <h3>NO ANNUAL FEES</h3>
                <h3>NO HOSTING FEES</h3>
                <h3 class="highlight">This is it!</h3>
            </div>
            <div class="col-md-4 videoHolder">
                <iframe src="https://www.websitetalkingheads.com/specials/female.php?name=<?=$female?>" frameborder="0" width="320" height="320" scrolling="No" id="FemaleSpokesperson" name="FemaleSpokesperson"></iframe>
                <h3>
                    <div id="female">
                        <?=$female?>
                    </div>
                </h3>
            </div>
        </div>
    </section>
    <section class="container-fluid light-blue">
        <h2>Special #1</h2>
        <h3>Single Video</h3>
        <div class="orangetext"><a href="/order.php">Order One &quot;30 Second&quot; for $199</a>
        </div>
        <div class="orangetext"><a href="/order.php">Order One &quot;60 Second&quot; for $299</span></a>
        </div>
        <p align="center" class="largeText"><span class="centeredmedium">30 Second=41-90 Words, 60 Second=91-180 Words</span>
        </p>
    </section>
    <section>
        <h2>Special #2</h2>
        <h3>Buy One Get One Free!</h3>
        <div align="center"><a href="../order.php"><img src="https://www.websitetalkingheads.com/images/buy1-get1.png" id="buy1-get1"/></a>
        </div>
        <div class="orangetext"><a href="/order.php">Order One &quot;30 Second&quot; at Reg.Price of $299 and GET ONE WITH THE SAME ACTOR FREE! ($600 Value)</a>
        </div>
        <div class="orangetext"><a href="/order.php">Order One &quot;60 Second&quot;at  Reg. Price of $399 and GET ONE WITH THE SAME ACTOR FREE! ($800 Value)</span></a>
        </div>
        <p align="center" class="largeText"><span class="centeredmedium">30 Second=41-90 Words, 60 Second=91-180 Words</span>
        </p>
        <p align="center" class="seventyfivepercent">*Second video shot at same time, for same domain using the same Featured Actor</p>
    </section>
    <section class="center-block light-blue">
        <h2>Special #3</h2>
        <h3>Multiple Video Special</h3>
        <div class="specials">
            <div class="row spacer">
                <div class="col-sm-3"><a href="../order.php"><img class="img-responsive special-img" src="https://www.websitetalkingheads.com/images/60-sec.png" alt="Video Spokesperson-60 Seconds for $299" id="60-sec"/></a>
                </div>
                <div class="col-sm-3"><a href="../order.php"><img class="img-responsive special-img" src="https://www.websitetalkingheads.com/images/4x30-sec.png" alt="Video Spokesperson-Four 30 Second videos for $399" id="4x30-sec"/></a>
                </div>
                <div class="col-sm-3"><a href="../order.php"><img class="img-responsive special-img" src="https://www.websitetalkingheads.com/images/10x30-sec.png" alt="Video Spokesperson-Ten 30 Second videos for $799" id="10x30-sec"/></a>
                </div>
                <div class="col-sm-3"><a href="../order.php"><img class="img-responsive special-img" src="https://www.websitetalkingheads.com/images/5x60-sec.png" alt="Video Spokesperson-Five 60 Second videos for $799" id="5x60-sec"/></a>
                </div>
            </div>
        </div>
        <div class="c"></div>
        <p align="center" class="largeText">Multiple Videos must choose only ONE Featured Actor from above </span><span class="seventyfivepercent"> <br />
    All special packages must be shot at same time, for same domain, using only ONE Featured Actor</span></span>
        </p>
        <p align="center" class="largeText"><span class="centeredmedium">30 Second=41-90 Words, 60 Second=91-180 Words</span>
        </p>
    </section>
    <section class="container p25">
        <?php include ("../includes/order-now.php");?>
    </section>
    <section class="container p25">
        <a href="../pricing">
    <button class="btn btn-pricing btn-lg center-block"><h2>Pricing Page</h2></button>
</a>
    
    </section>
    <script type="text/javascript">
        function MyOnload() {
            var element = document.createElement( "script" );
            element.src = "wthvideo/both.js";
            document.body.appendChild( element );
        }
        if ( window.addEventListener )
            window.addEventListener( "load", MyOnload, false );
        else if ( window.attachEvent )
            window.attachEvent( "onload", MyOnload );
        else window.onload = MyOnload;
    </script>
    <?php include ('../includes/footer.php'); ?>
    <?php include ('../includes/chatform.php'); ?>
</body>

</html>