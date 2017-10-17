<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $keyword = "Proposal";
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
    ?>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Do you have a proposal that you need to make?  Video can help you land that contract" name="description">
    <meta content="Talking Heads®" name="author">
    <title>Talking Heads®|
        <?=$keyword?>
        Video</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/fluid.css" rel="stylesheet" type="text/css">
    <link href="css/video-player.css" rel="stylesheet" type="text/css">
    <script src="https://use.typekit.net/xtn2ztk.js">
    </script>
    <script>
        try {
            Typekit.load( {
                async: true
            } );
        } catch ( e ) {}
    </script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://websitetalkingheads.com/"><img alt="Talking Heads® Video" class="img img-responsive" src="img/TalkingHeads-banner.png"></a>
            </div>
            <div class="navbar navbar-text slogan">
                <strong>It's Time We Talk</strong>
            </div>
            <div class="nav navbar-nav navbar-right">
                <h3 class="pad-right"><a class="white" href="tel://801-748-2281" title="Give us a call."><strong class="phone">801-748-2281</strong></a></h3>
            </div>
        </div>
    </nav>
    <section class="whiteboard-demo">
        <div class="jumbotron">
            <div class="row space">
                <h1 class="text-center">Video for <?=$keyword?>
        s: The Icing on the Cake!</h1>
                <h2 class="text-center grey">Learn how we make the best <?=$keyword?>
         Video.</h2>
            </div>
            <div class="row center-block">
                <div class="col-md-8 center-block">
                    <div class="embed-responsive embed-responsive-16by9 banner-video">
                        <iframe allowfullscreen class="embed-responsive-item" src="https://www.youtube.com/embed/NiCdoZ_7kcA?rel=0&autohide=2&showinfo=0"></iframe>
                    </div>
                </div>
                <div class="get-a-quote col-md-4 center-block">
                    <?php include("../forms/landingpage-quote.php"); ?>
                </div>
            </div>
        </div>
    </section>
    <?php include ("includes/More.php");?>
    <section class="container">
        <div class="row text-center space">
            <div class="col-md-4">
                <i class="fa fa-bullseye fa-5x red aria-hidden="></i>
                <h3>Hypnotize With the Hand</h3>
                <p>Scientific studies show our brains like watching a hand draw. We are pulled in and can’t take our eyes off. Have your
                    <?=$keyword?>
                    Video drawn for your Clients.</p>
            </div>
            <div class="col-md-4">
                <i aria-hidden="true" class="fa fa-gift fa-5x blue"></i>
                <h3>Candy for the Brain</h3>
                <p>
                    <?=$keyword?>
                    causes a dopamine rush. This increases the viewers focus, memory, and enjoyment. Your cients will watch your video proposal. We like it! We REALLY like it!</p>
            </div>
            <div class="col-md-4">
                <i aria-hidden="true" class="fa fa-question fa-5x green" style="margin-right:14px"></i>
                <h3>Guess What I’m Drawing</h3>
                <p>As the hand reveals the drawing. Our brains asks, “What is that?” It tries to guess and when it’s right it rewards itself with more brain candy.</p>
            </div>
        </div>
    </section>
    <section class="content-section-a">
        <div class="container space">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Professional <?=$keyword?>
           Video</h2>
                    <p class="lead">
                        <?=$keyword?>
                        Videos created by a Professional Video Production company can increase your sales and close rates.</p>
                    <p class="lead">When they are looking at the numbers, you should be reminding them WHY they should be working with you. We will work closely with you to develop a clear message that sparks their motivation to engage with your company.</p>
                </div>
                <div class="col-lg-6 col-sm-6 center-block">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" scrolling="no" src="../ivideo/Whiteboard.php?mute=false&autostart=false&video=Collaboration%20vs%20Survey&color=#000"></iframe>
                    </div>iv&gt;
                </div>
            </div>
        </div>
    </section>
    <section class="content-section-b">
        <div class="container space">
            <div class="row">
                <div class="col-lg-6 col-sm-6 center-block">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" scrolling="no" src="../ivideo/Whiteboard.php?video=Reason_to_Believe&color=#111111"></iframe>
                    </div>iv&gt;
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading text-center">We don’t use TEMPLATES, QUESTIONNAIRES, or IMAGE LIBRARIES</h2>
                    <p class="lead">Templates are generic and lack the magic that make your company unique. Questionnaires are like phone surveys, they don’t dig deep enough to really understand what you do. And over used Images Libraries just suck! You want your own custom message, not someone else’s leftovers.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section-a">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1">
                <div class="short-content">
                    <div class="row space">
                        <div class="col-md-4 text-center"><i class="fa fa-comments-o  fa-5x grey" aria-hidden="true"></i> <br>
                            <h3 class="no-margin">Communication</h3>
                        </div>
                        <div class="col-md-8">
                            <p>Before we start, We interview you. We find out WHAT you do, HOW you do it, and WHY you do it that way. We desire to be on the exact same page as you; like we work there.</p>
                            <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col-md-4 text-center"><i class="fa fa-users fa-5x grey" aria-hidden="true"></i> <br>
                            <h3 class="no-margin">Collaboration</h3>
                        </div>
                        <div class="col-md-8">
                            <p>The very best scripts are a group process. You understand your service. We understand impact, language and inspiration. Integrated, we are unstoppable.</p>
                            <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col-md-4 text-center"><i class="fa fa-television  fa-5x grey" aria-hidden="true"></i> <br>
                            <h3 class="no-margin">Creation</h3>
                        </div>
                        <div class="col-md-8">
                            <p>We have produced countless Videos for several of the biggest organisations on the planet. They trust us to develop an excellent video that will affect their clients. </p>
                            <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8">
                        <img src="../whiteboard/whiteboard-animation-example.jpg" class="img-responsive" alt="Whiteboard Animation Example">
                    </div>
                </div>
                <h3 class="text-center">Whiteboard Video</h3>
                <p>Whiteboard videos stimulate your clients' brains. A Whiteboard sketch is like a time machine with each new sketch practically hypnotizing your viewer. Because of this hyper focus, the viewer also keeps in mind more of your whiteboard animation than regular videos.</p>
                <p>Clearly, not all <a href="http://www.whiteboard.video/Animation/" title="Whiteboard Animations">whiteboard design animations</a> are the identical, so, we work with you to make the best whiteboard video for your organization. We concentrate on supercharged messages using a hand drawn whiteboard advertisements for that triggers center and engagement That's the place we come in. We make highly successful, energizing whiteboard artist VIDEOS that clarify your item, business, programming or administration.</p>
            </div>

        </div>
        </div>

    </section>
    <section class="video">
        <div class="row space center-block">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe allowfullscreen class="embed-responsive-item" data-toggle="tooltip" frameborder="0" src="https://player.vimeo.com/video/164675870?title=0&byline=0&portrait=0" title="&lt;?=$keyword?&gt; Custom Example"></iframe>

            </div>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="clearfix testimonials">
                <h2 class="text-center space">Client Testimonials</h2>
                <div class="span10" id="testimonial">
                    <div class="testimonialQuote">
                        This work is absolutely phenomenal !!!! You guys are awesome... We are very, very pleased and look forward to working with you guys on other projects.
                        <div class="testimonialName">
                            Ralph Donaldson Jr.- WiseThink Health
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        I love it.. Looks great. You guys do great work and Chantel is beautiful. I and my boss are impressed. We have several others we want you to do for us.
                        <div class="testimonialName">
                            Dan Cusack- Superior Surgical, LLC
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        I just wanted to give KUDOS to the production of the latest video made on www.hafha.com...I love the way it was made and how it is displayed on the site.
                        <div class="testimonialName">
                            Marty- Virginia Homes
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Please get that on our website immediately! Love it, love it, love it! Awesome job to everyone involved!! ... I will absolutely be sending more clients your way!
                        <div class="testimonialName">
                            Derek- PC Austin
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        I really appreciate your wonderful assistance and expertise here. Working with you guys continues to be excellent. Thanks again.
                        <div class="testimonialName">
                            Sean Childs- Horizon Marketing Group
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Excellent! Great job, and excellent turn-around. You will definitely be hearing from us again. Thanks!
                        <div class="testimonialName">
                            Rick Lamberson- BlueWater Inet Group
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Excellent! Installed in just seconds and works great!
                        <div class="testimonialName">
                            Thomas Kain- Dealer World
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        I had an exceptionally tight deadline... WebsiteTalkingHeads\xae went above and beyond to ensure my project was completed on time.
                        <div class="testimonialName">
                            Benjamin Croft- WBECS
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        It was sincerely my pleasure in doing business with you. Refreshing in having your "Customer Service" ... so Prompt & Accurate!!!
                        <div class="testimonialName">
                            Mike Svestka- Printing Industry Exchange
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Thanks so much for the GREAT customer service. You guys were prompt in the order process; quick to respond to emails, & cordial over the Phone.
                        <div class="testimonialName">
                            Tim &amp; Greg- Rainbow RV
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        I could not be happier with the product, with your service, and with your company. I hope to need your services many more times! Thanks a million!
                        <div class="testimonialName">
                            Kevin Ramsey- Urban Cards & Comics
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Guys this is so cool, you did a great job. Thanks, more than I could hope for, but just what I wanted. We will work together again, count on it
                        <div class="testimonialName">
                            Gabriel McCrea- Search Corp
                        </div>
                    </div>
                    <div class="testimonialQuote">
                        Thank you very much! The video looks absolutely wonderful and meets our expectations 100% - this is a great job. Please convey my thanks to the team and Chantel.
                        <div class="testimonialName">
                            Damith Perera- SEOLIX
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid text-center space">
        <h2 class="section-heading text-capitalize">You are in good company</h2>
        <h3 class="grey thin">Call <span class="white"><a class="phone-header" href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></span> to learn why Fortune 100’s, startups, small and mid-size businesses trust Talking Heads with their Whiteboard videos.</h3>
    </section>
    <section class="content-section-a">
        <div class="container space">
            <?php include ("../includes/awards.php");?>
        </div>
    </section>
    <?php include("footer.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
    </script>
    <script src="js/custom.js">
    </script>
    <script src="js/cycle.js">
    </script>
    <script>
        $( function () {
            $( '[data-toggle="tooltip"]' ).tooltip()
        } )
    </script>
    <!-- Google Code for Previous Visitors -->
    <!-- Remarketing tags may not be associated with personally identifiable 
information or placed on pages related to sensitive categories. For 
instructions on adding this tag and more information on the above 
requirements, read the setup guide: google.com/ads/remarketingsetup -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1058129782;
        var google_conversion_label = "-jOyCO6ZkAIQ9o7H-AM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script src="//www.googleadservices.com/pagead/conversion.js" type="text/javascript">
    </script>
    <noscript>
        <div style="display:inline;"><img alt="" height="1" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1058129782/?value=0&amp;label=-jOyCO6ZkAIQ9o7H-AM&amp;guid=ON&amp;script=0" style="border-style:none;" width="1">
        </div>
    </noscript>
</body>

</html>