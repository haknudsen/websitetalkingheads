<?php 
$page = basename($_SERVER['PHP_SELF']); /* Returns The Current PHP File Name */
$pagename = ucfirst(strtok($page,"."));
$pagetitle = trim($page, "/");
$tags = get_meta_tags($pagetitle);
?>
<h1 class="hidden">Website Talking Heads | <?=$pagename?></h1>
<section title="Talking-Heads-Header">
<header class="center-block">
  <h2 class="hidden">Website Talking Heads | Navigation</h2>
  <section id="header_top">
    <h3><a href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></h3>
  </section>
  <nav class="row center-block" id = "Talking-Heads-Navigation">
    <ul style="center-block">
      <li style="center-block"><a href="https://www.websitetalkingheads.com/index.php" id="menuHome">
        <h2>Home</h2>
        </a></li>
      <li style="center-block"><a href="
https://websitetalkingheads.com/actors/female-carousel.php" id="menuActors">
        <h2>Actors</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/examples/index.php" id="menuExamples">
        <h2>Examples</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/pricing/index.php" id="menuPrices">
        <h2>Prices</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/orderform/index.php" id="menuOrder">
        <h2>Order</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/whiteboard/index.php" id = "whiteboard">
        <h2><div class="wb">White Board</div></h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/videopresentations/index.php" id="menuVideos">
        <h2>Videos</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/contact.php" id="menuContact">
        <h2>Contact</h2>
        </a></li>
      <li style="center-block"><a href="https://www.websitetalkingheads.com/specials/"  id="menuSpecials">
        <h2>Specials</h2>
        </a></li>
    </ul>
    <div id="c"></div>
  </nav>
    <div class="line"></div>
</header>
</section>
<SCRIPT LANGUAGE="JavaScript">
	var loc = location.href;
	switch(loc){
		case "https://www.websitetalkingheads.com/index.php":
		case "https://www.websitetalkingheads.com/":
		document.getElementById('menuHome').className="current";
		break;
		case "
https://websitetalkingheads.com/actors/female-carousel.php":
		case "
https://websitetalkingheads.com/actors/male-carousel.php":
		case "
https://websitetalkingheads.com/actors/female-carousel2.php":
		case "
https://websitetalkingheads.com/actors/carousel4.php":
		document.getElementById('menuActors').className="current";
		break;

		case "https://www.websitetalkingheads.com/examples.php":
		case "https://www.websitetalkingheads.com/examples/index.php":
		document.getElementById('menuExamples').className="current";
		break;
		case "https://www.websitetalkingheads.com/pricing/index.php":
		document.getElementById('menuPrices').className="current";
		break;
		case "https://www.websitetalkingheads.com/orderform/index.php":
		document.getElementById('menuOrder').className="current";
		break;
		case "https://www.websitetalkingheads.com/explanationvideo":
		document.getElementById('whiteboard').className="current";
		break;
		case "https://www.websitetalkingheads.com/videopresentations/index.php":
		document.getElementById('menuVideos').className="current";
		break;
		case "https://www.websitetalkingheads.com/contact.php":
		document.getElementById('menuHome').className="other";
		document.getElementById('menuActors').className="other";
		document.getElementById('menuExamples').className="other";
		document.getElementById('menuPrices').className="other";
		document.getElementById('menuOrder').className="other";
		document.getElementById('whiteboard').className="other";
		document.getElementById('menuVideos').className="other";
		document.getElementById('menuContact').className="current";
		document.getElementById('menuSpecials').className="other";
		break;
		case "https://www.websitetalkingheads.com/specials/":
		document.getElementById('menuSpecials').className="current";
		break;
		
	}
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3598588-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">if (typeof hmtracker == 'undefined') {var hmt_script = document.createElement('script'),hmt_purl = encodeURIComponent(location.href).replace('.', '~');hmt_script.type = "text/javascript";hmt_script.src = "//websitetalkingheads.com/heatmap/?hmtrackerjs=WTH&uid=370cf24c7a34e7a3f696452761f30d5bcab302a6&purl="+hmt_purl;document.getElementsByTagName('head')[0].appendChild(hmt_script);}</script>