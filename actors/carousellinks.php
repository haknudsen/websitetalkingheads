<section class="page-header">
    <h1 class="contactus">Our Spokespeople</h1>
    <div class="carouselheader">
        <nav class="row center-block actors">
            <div class="col-sm-3 actorLink"><a href="male-carousel.php"  title="Male Carousel"  alt="Male Carousel" id="male-carousel" >
                <h3>Male
                    <div class="linkTitle">Carousel</div>
                </h3>
                </a></div>
            <div class="col-sm-3 actorLink"><a href="female-carousel.php"  title="Female Carousel"  alt="Female Carousel" id="female-carousel" >
                <h3>Female
                    <div class="linkTitle">Carousel</div>
                </h3>
                </a></div>
            <div class="col-sm-3 actorLink"><a href="female-carousel2.php"  title="Female Carousel 2"  alt="Female Carousel 2" id="female-carousel-2" >
                <h3>Female
                    <div class="linkTitle">Carousel 2</div>
                </h3>
                </a></div>
            <div class="col-sm-3 actorLink"><a href="specialty-spokespeople.php"  title="Carousel 4"  alt="Carousel 4" id="carousel 4" >
                <h3>
                    <div class="linkTitle">Carousel 4</div>
                </h3>
                </a></div>
        </nav>
    </div>
</section>
<SCRIPT LANGUAGE="JavaScript">
	var loc = location.href;
	switch(loc){
		case "http://websitetalkingheads.com/actors/male-carousel.php":
		document.getElementById('male-carousel').className="current";
		document.getElementById('female-carousel').className="other";
		document.getElementById('female-carousel-2').className="other";
		document.getElementById('carousel 4').className="other";
		break;
		case "http://websitetalkingheads.com/actors/female-carousel.php":
		document.getElementById('female-carousel').className="current";
		document.getElementById('male-carousel').className="other";
		document.getElementById('female-carousel-2').className="other";
		document.getElementById('carousel 4').className="other";
		break;
		case "http://websitetalkingheads.com/actors/female-carousel2.php":
		document.getElementById('female-carousel-2').className="current";
		document.getElementById('female-carousel').className="other";
		document.getElementById('male-carousel').className="other";
		document.getElementById('carousel 4').className="other";
		break;
		case "http://websitetalkingheads.com/actors/carousel4.php":
		document.getElementById('carousel 4').className="current";
		document.getElementById('female-carousel').className="other";
		document.getElementById('male-carousel').className="other";
		document.getElementById('female-carousel-2').className="other";
		break;
		default:
		
	}

</script>