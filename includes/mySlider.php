<h3 class="ClientQuotes">Client Testimonials</h3>
<div id="slider">
  <ul>
    <li><div id ="testimonialquote">&quot;This work is absolutely phenomenal !!!!  You guys are awesome...  We are very, very pleased and look forward to working with you guys on other projects.&quot;</div><div id="testimonalname">Ralph Donaldson Jr.- WiseThink Health </div></li>
    <li ><div id ="testimonialquote">&quot;I just wanted to give KUDOS to the production of the latest video made on www.hafha.com...I love the way it was made and how it is displayed on the site.&quot;</div><div id="testimonalname">Marty- Virginia Homes </div></li>
    <li><div id ="testimonialquote">&quot;Please get that on our website immediately! Love it, love it, love it! Awesome job to everyone involved!! ... I will absolutely be sending more clients your way!&quot;</div><div id="testimonalname">Derek- PC Austin </div></li>
    <li ><div id ="testimonialquote">&quot;I really appreciate your wonderful assistance and expertise here.  Working with you guys continues to be excellent.  Thanks again.&quot;</div>       <div id="testimonalname">Sean Childs- Horizon Marketing Group</div></li>
    <li><div id ="testimonialquote">&quot;Excellent!  Great job, and excellent turn-around.  You will definitely be hearing from us again.  Thanks!&quot;</div><div id="testimonalname">Rick Lamberson- BlueWater Inet Group</div></li>
    <li ><div id ="testimonialquote">&quot;Excellent!  Installed in just   seconds and works great!&quot;</div><div id="testimonalname">Thomas Kain- Dealer World</div></li>
    <li><div id ="testimonialquote">&quot;I had an exceptionally tight deadline... WebsiteTalkingHeads\xae went above and beyond to ensure my project was completed on time.&quot;</div><div id="testimonalname">Benjamin Croft- WBECS</div></li>
    <li ><div id ="testimonialquote">&quot;It was sincerely my pleasure in doing business with you.  Refreshing in having your "Customer Service" ... so Prompt & Accurate!!!&quot;</div><div id="testimonalname">Mike Svestka- Printing Industry Exchange</div></li>
    <li ><div id ="testimonialquote">&quot;Excellent!  Installed in just   seconds and works great!&quot;</div><div id="testimonalname">Thomas Kain- Dealer World</div></li>
    <li><div id ="testimonialquote">&quot;Thanks so much for the GREAT customer service.  You guys were prompt in the order process; quick to respond to emails, & cordial over the Phone.&quot;</div><div id="testimonalname">Tim &amp; Greg- Rainbow RV</div></li>
    <li ><div id ="testimonialquote">&quot;I could not be happier with the product, with your service, and with your company.  I hope to need your services many more times! Thanks a million!&quot;</div><div id="testimonalname">Kevin Ramsey- Urban Cards & Comics</div></li>
    <li><div id ="testimonialquote">&quot;Guys this is so cool, you did a great job.  Thanks, more than I could hope for, but just what I wanted.  We will work together again, count on it&quot;</div> <div id="testimonalname">Gabriel McCrea- Search Corp</div></li>
    <li ><div id ="testimonialquote">&quot;Thank you very much! The video looks absolutely wonderful and meets our   expectations 100% - this is a great job. Please convey my thanks to the team and   Chantel.&quot;</div><div id="testimonalname">Damith Perera- SEOLIX</div></li>
  </ul>  
</div> 
<script>
jQuery(document).ready(function ($) {


    setInterval(function () {
        moveRight();
    }, 3000);
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    
 </script>
