<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Custom Animated Video | Website Animation | Video Animation</title>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
    <meta name="description" content="Talking Heads can explain your product, service or procedure in an Animated Explainer Video! Our Animated Explainer Videos powerfully expain things step-by-step, and it keep your viewers' attention!">
    <meta name="keywords" content="Animation, Animated Explainer Video, Custom Video.">
    <META NAME="robots" CONTENT="index, follow">
    <!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
    <META NAME="revisit-after" CONTENT="30 days">
    <META NAME="distribution" CONTENT="global">
    <META NAME="rating" CONTENT="general">
    <META NAME="Content-Language" CONTENT="english">
    <meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8="/>
    <meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="../css/examples.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../lightbox/js/lightbox/themes/default/jquery.lightbox.css"/>
    <link href="../css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css"/>
    <link href="../css/fluid.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../lightbox/js/lightbox/jquery.lightbox.min.js"></script>
    <script type="text/javascript">
        jQuery( document ).ready( function ( $ ) {
            $( '.lightbox' ).lightbox();
        } );
    </script>
    <script type="text/javascript" src="includes/examples.js"></script>
</head>

<body>
    <?php include ('../includes/header.php'); ?>
    <section id="jumbotron">
        <h1>Animated Explainer Videos!</h1>
                        <h2>Talking Heads<sup>&reg;</sup> can explain your product, service or procedure in an Animated Explainer Video!</h2> 
                        <h3>Our Animated Explainer Videos powerfully expain things step-by-step, and it keep your viewers' attention!</h3>
        <div class="info">
            <div class="row center-block p25">
                <div class="col-sm-6 col-sm-offset-1" id="jumbo-video">
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jZEI_x0akE4?rel=0"></iframe>
                    </div>
                </div>
                <div class="col-sm-4">
                   <div id="form-holder">
                    <?php include ('../forms/requestQuote-Animation.php'); ?>
                   </div>
                <img src="../images/explainer-video-banner.png" alt="Best Explainer Video Companies" class="img img-responsive" id="explainer-seal"/> </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <section class="container-fluid">
        <h1>Animation Examples</h1>
        <div class="examplesAnimation center-block">
            <?php
            $count = 12;
            include( '../examples/animation-examples.php' );
            ?>
            <div class="RSS-Feed"> <a href="../mrss/animation.rss"><img src="../mrss/images/Talking-Heads-RSS-Feed.png" width="28" height="28" title="Talking Heads Animation RSS Feed" alt="Talking Heads Animation RSS Feed"/></a> </div>
        </div>
        </div>
    </section>
    <section class="container">
        <?php include("../examples/animation-media.php"); ?>
    </section>
    <?php include ('../includes/CallForQuote.php'); ?>
    <?php include ('../includes/footer.php'); ?>
    <?php include ('../includes/chatform.php'); ?>
    <script>
        $(document).ready(function(){
            var videoHeight = $('#jumbo-video').height();
            var newHeight = (videoHeight-$('#form-holder').outerHeight());
            console.log(' v'+videoHeight + '-' + newHeight);
            $('#explainer-seal').css('max-height',newHeight);
        })
        </script>
</body>

</html>