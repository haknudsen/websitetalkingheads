<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="Talking Heads can explain your product, service or procedure in an Drawing Animation Video! Our Animated Drawing Videos powerfully expain your product or service step-by-step, and keep your viewers' attention! Whether you can call it a Sketch Video, Chalkboard Video, Hand Drawing Video, Whiteboard Animation, or Animated Explainer Video Talking Heads&reg; will make the best video for you!" name="description">
	<meta content="WebsiteTalkingHeads.com" name="author"><?php
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
	    $pageURL = strtolower( $pageURL );
	    $url = str_replace( "https://www.websitetalkingheads.com:443", "", $pageURL );
	    $url = str_replace( "video", " ", $url );
	    $url = str_replace( "_", " ", $url );
	    $url = str_replace( "/", "", $url );
	    $keyword = ucwords( $url );
	    echo( $keyword );
	    ?>
	<title><?=$keyword?>Video|Talking Heads®</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="../video_for_proposals/css/landing-page.css" rel="stylesheet">
	<link href="../video_for_proposals/css/fluid.css" rel="stylesheet" type="text/css">
	<link href="../video_for_proposals/css/video-player.css" rel="stylesheet" type="text/css">
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
				<a class="navbar-brand" href="https://www.websitetalkingheads.com/"><img alt="Talking Heads® Video" class="img img-responsive" src="../video_for_proposals/img/TalkingHeads-banner.png"></a>
			</div>
			<div class="navbar navbar-text slogan">
				<strong>It's Time We Talk</strong>
			</div>
			<div class="nav navbar-nav navbar-right">
				<h3 class="phone white"><a href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></h3>
			</div>
		</div>
	</nav>
	<section class="whiteboard-demo">
		<div class="jumbotron">
			<div class="row space">
				<h1 class="text-center"><?=$keyword?>
				: The Icing on the Cake!</h1>
				<h2 class="text-center grey">Learn how we make the best <?=$keyword?>
				 today.</h2>
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
	<section class="content-section-a">
		<div class="container space">
			<?php include ("../includes/awards.php");?>
		</div>
	</section><?php include ("../video_for_proposals/includes/More.php");?>
	<section class="container">
		<div class="row text-center space">
			<div class="col-md-4">
				<i class="fa fa-bullseye fa-5x red aria-hidden="></i>
				<h3>Hypnotize With the Hand</h3>
				<p>Scientific studies show our brains like watching a hand draw. We are pulled in and can’t take our eyes off. Have a <?=$keyword?>
				 created for your Clients today.</p>
			</div>
			<div class="col-md-4">
				<i aria-hidden="true" class="fa fa-gift fa-5x blue"></i>
				<h3>Candy for the Brain</h3>
				<p><?=$keyword?>
				 causes a dopamine rush. This increases the viewers focus, memory, and enjoyment. Your cients will watch your <?=$keyword?>
				. We like it! We REALLY like it!</p>
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
					<h2 class="section-heading">Professional Video <?=$keyword?>
					</h2>
					<p class="lead"><?=$keyword?>
					 Videos created by a Professional Video Production company can increase your sales and close rates.</p>
					<p class="lead">When they are looking at the numbers, you should be reminding them WHY they should be working with you. We will work closely with you to develop a clear message that sparks their motivation to engage with your company.</p>
				</div>
				<div class="col-lg-6 col-sm-6 center-block">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" scrolling="no" src="https://www.websitetalkingheads.com/ivideo/Talking_Heads_v4.php?mute=false&autostart=false&video=Collaboration%20vs%20Survey&color=111111"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content-section-b">
		<div class="container space">
			<div class="row">
				<div class="col-lg-6 col-sm-6 center-block">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" scrolling="no" src="https://www.websitetalkingheads.com/ivideo/Talking_Heads_v4.php?mute=false&autostart=false&video=Thing_A_Ma_Bob&color=111111"></iframe>
					</div>
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
		<div class="short-content">
			<div class="row space">
				<div class="col-md-4 text-center">
					<i aria-hidden="true" class="fa fa-comments-o fa-5x grey"></i><br>
					<h3 class="no-margin">Communication</h3>
				</div>
				<div class="col-md-8">
					<p>Before we begin, We ask questions. We learn WHAT you do, HOW you do it, and WHY you do it that way? We want to be on the same page as you; like we work there.</p>
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="row space">
				<div class="col-md-4 text-center">
					<i aria-hidden="true" class="fa fa-users fa-5x grey"></i><br>
					<h3 class="no-margin">Collaboration</h3>
				</div>
				<div class="col-md-8">
					<p>The best scripts are a collaborative. You know your business. We know motivation, language and influence. Combined, we are unstoppable.</p>
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="row space">
				<div class="col-md-4 text-center">
					<i aria-hidden="true" class="fa fa-television fa-5x grey"></i><br>
					<h3 class="no-margin">Creation</h3>
				</div>
				<div class="col-md-8">
					<p>We have created hundreds of <?=$keyword?>
					 Videos for some of the largest business in the world. They trust us to create a great product that will influence their customers.</p>
					<hr class="section-heading-spacer">
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid text-center panel-holder">
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
				<div id="content"></div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">You are in Good Company</h3>
					</div>
					<div class="panel-body">
						Call <span class="white"><a class="phone-header" href="tel://801-748-2281" title="Give us a call. ">801-748-2281</a></span> to learn why Fortune 100’s, startups, small and mid-size businesses trust Talking Heads® with their <?=$keyword?>
						Videos. "<span class="thin">It's Time We Talk</span>" about your Video Solution.
					</div>
				</div>
				<div id="content"></div>
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
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12"> <a href="http://www.talkingheads.video/affiliate/"><img alt="Talking Heads Video Logo" class="center-block" height="84" src="../proposals/images/TalkingHeads-small.png" width="200"></a>
					<p class="copyright text-muted small text-center">Copyright &copy; <?php echo date("Y")?> <a href="https://www.websitetalkingheads.com/" title="Website Talking Heads">WebsiteTalkingHeads.com</a>. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
	</script> 
	<script src="../video_for_proposals/js/custom.js">
	</script> 
	<script src="../video_for_proposals/js/cycle.js">
	</script> 
	<script src="../landing/content.js">
	</script> 
	<script src="../js/evenHeight.js">
	</script> 
	<script>
	       $( window ).load( function () {
	           $( '[data-toggle="tooltip"]' ).tooltip();
	           $( '.panel-holder' ).find( '.panel-body' ).equalizeHeight();
	       } );
	</script> <!-- Google Code for Previous Visitors -->
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
	</script> <noscript>
	<div style="display:inline;"><img alt="" height="1" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1058129782/?value=0&amp;label=-jOyCO6ZkAIQ9o7H-AM&amp;guid=ON&amp;script=0" style="border-style:none;" width="1"></div></noscript>
</body>
</html>