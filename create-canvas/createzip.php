<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Zip Files Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/create-files.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
class ExtendedZip extends ZipArchive {

    // Member function to add a whole file system subtree to the archive
    public function addTree($dirname, $localname = '') {
        if ($localname)
            $this->addEmptyDir($localname);
        $this->_addTree($dirname, $localname);
    }

    // Internal function, to recurse
    protected function _addTree($dirname, $localname) {
        $dir = opendir($dirname);
        while ($filename = readdir($dir)) {
            // Discard . and ..
            if ($filename == '.' || $filename == '..')
                continue;

            // Proceed according to type
            $path = $dirname . '/' . $filename;
            $localpath = $localname ? ($localname . '/' . $filename) : $filename;
            if (is_dir($path)) {
                // Directory: add & recurse
                $this->addEmptyDir($localpath);
                $this->_addTree($path, $localpath);
            }
            else if (is_file($path)) {
                // File: just add
                $this->addFile($path, $localpath);
            }
        }
        closedir($dir);
    }

    // Helper function
    public static function zipTree($dirname, $zipFilename, $flags = 0, $localname = '') {
        $zip = new self();
        $zip->open($zipFilename, $flags);
        $zip->addTree($dirname, $localname);
        $zip->close();
    }
}
?>
<?

$directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos'];
$numberofimages = $_POST['numberofimages'];
$directorytozip = $directory . '/wthvideo/';
$maindirectory = $directory . '/';



// increase script timeout value
ExtendedZip::zipTree($directorytozip, $maindirectory . "download.zip", ZipArchive::CREATE);
echo "Archive created successfully.";  


$downloadtowrite ='<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Website Talking Heads - JS Guide -  Add an Online Video Spokesperson to Your Website, Virtual Spokesperson, Website Video Spokesperson, Web Spokesperson, Website Actor</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="online spokesperson, video spokesperson, website talking heads, website actor, website video, transparent flash, virtual spokesperson, spokesperson, video presenter, website presenter, website spokesperson, video salesperson">
<meta name="description" content="Online video spokesperson.  For only $199, add a virtual spokesperson to your website.  An online presenter can increase traffic conversion rates on your website.  Integrate flash video, website video, website actor and objects to create dynamic streaming video and easily add it your existing website.">
<meta name="robots" CONTENT="index, follow">
<!-- (Robot commands: All, None, Index, No Index, Follow, No Follow) -->
<meta name="revisit-after" CONTENT="30 days">
<meta name="distribution" CONTENT="global">
<meta name="rating" CONTENT="general">
<meta name="Content-Language" CONTENT="english">
<meta name="verify-v1" content="YNESpqoAwK51PmBV7/PFKLG0agx7AQPKhXXcYAXGGF8=" />
<meta name="norton-safeweb-site-verification" content="iinbv24r-1ix20hgj5l94wz2rnn3aiwi0336hwysvvpiskquy6ijsh9wy12f3znbed-hz1ay8ppzhgqap-sicqtw6ui29d0wrfcpenudh1ml9xwjbej7u25xy9pnm6yr" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="http://websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://websitetalkingheads.com/css/examples.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1 class="pageinfo">Website Talking Heads | <?=$pagename?></h1>
<section title="Talking-Heads-Header">
<header class="center-block">
  <h2 class="hidden">Website Talking Heads | Navigation</h2>
  <section id="header_top">
    <h3><a class="phone-header" href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></h3>
  </section>
  <nav class="row center-block" id = "Talking-Heads-Navigation">
    <ul style="center-block">
      <li style="center-block"><a href="http://www.websitetalkingheads.com/index.php" id="menuHome">
        <h2>Home</h2>
        </a></li>
      <li style="center-block"><a href="http://websitetalkingheads.com/spokespeople/female-carousel.php" id="menuActors">
        <h2>Actors</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/examples/index.php" id="menuExamples">
        <h2>Examples</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/pricing/index.php" id="menuPrices">
        <h2>Prices</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/orderform/index.php" id="menuOrder">
        <h2>Order</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/whiteboard/index.php" id = "whiteboard">
        <h2><div class="wb">White Board</div></h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/videopresentations/index.php" id="menuVideos">
        <h2>Videos</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/contact.php" id="menuContact">
        <h2>Contact</h2>
        </a></li>
      <li style="center-block"><a href="http://www.websitetalkingheads.com/specials/"  id="menuSpecials">
        <h2>Specials</h2>
        </a></li>
    </ul>
    <div id="c"></div>
  </nav>
    <div class="line"></div>
</header>
</section>
<section class="page-header">
    <h3 class="downloadtext"><a href="download.zip">Click here to download your zip file</a></h3>
</section>
<section class="text-left thin-width center-block spacer">
                        <div>
                          <div class="downloadLink">&lt;script type=&quot;text/javascript&quot; src=&quot;wthvideo/wthvideo.js&quot;&gt;&lt;/script&gt;</div>
                        </div>
    <h1>Installation Instructions</h1>
    <div class="text-left thin-width center-block">
        <ol>
            <li>Create a folder called wthvideo in the same directory that holds the page that you want to put the video on.</li>
            <li>Unzip all the files from the zip file onto your computer</li>
            <li>Upload all these files to the wthvideo directory that you created</li>
            <li>Add the following line to your page before the &lt;/body&gt; tag:</li>
        </ol>
        <div class="downloadLink">&lt;script type=&quot;text/javascript&quot; src=&quot;wthvideo/wthvideo.js&quot;&gt;&lt;/script&gt;</div>
        <br />
        For orders with more than one video the file in the line of code changes.  For the second video replace wthvideo.js with wthvideo2.js.  The thrid video it is wthvideo3.js and so on.<br />
    </div>
	<div class="row text-center">
    <div class="col-md-3 col-md-offset-2">
    <h3><a href="mailto: support@websitetalkingheads.com">Email Support</a></h3>
    </div>
    <div class="col-md-3 col-md-offset-2">
    <h3><a href="tel://801-748-2281" title="Give us a call.">801-748-2281</a></h3>
    </div>
    </div>
</section>
<section class="container">
<div class="features center-block">
<h2>Common Installation Issues</h2>
<p>If you follow the installation directions and your video does not appear, the most common issue is pathing, either the browser is looking in the wrong place for the wthvideo.js file or wthvideo.js file is looking in the wrong place for the player and video files. 
If this happens the remedy is to change the src value in the line of code above from src="wthvideo/wthvideo.js" to src="http://www.MyWebsite.com/wthvideo/wthvideo.js" (change to match where you put the wthvideo.js file). 
Then inside the wthvideo.js file is a variable named path. This is the folder the wthvideo.js file looks in for the player and videos. It is normally set to, "wthvideo" you will need to change it to, "http://www.MyWebsite.com/wthvideo"(change to match where you put the files).</p>
<h2>Devices</h2>
<p>Due to their screen size, devices display web pages differently than regular computers. Your video may cover up part of your page that has content you want your visitors to see or it may be off the screen entirely. You can remedy this by using the responsive feature(placing the video in a specific part of the page or disabling the HTML5 video.  You can learn about customizing the Talking Heads Player <a href="http://websitetalkingheads.com/talking-heads-player/customize-player.php">here</a>.</p>
<h2>Installing on Wordpress, Joomla, or a Website Builder</h2>
<p>Installing the Talking Heads Player on your website is usually very easy. Wordpress, Joomla, or other Website Builders can add a couple steps though.</p>
<p><strong>Wordpress-</strong> If your home page is not an actual page and is just a template, the template to add the line of code to is probably index.php but every template is different so it may take some trial and error to find the right place to put the code.  Other template pages could be main index.php and home.php.<br />
    Unless you have ftp access  Wordpress will not allow you to choose where you upload your files. If this is the case you need to follow these simple steps.</p>
<ul>
    <li>Use the wordpress file manager to upload the files.</li>
    <li>Find out where that is, the full url.  For example, <span class="myHighlight">"http://www.mywebsite.com/content/2012/6/5"</span>.</li>
    <li>Then in the wthvideo.js file change the path value from "wthvideo" to the url in step 1 and upload it.</li>
    <li>Then in the line of code we sent replace the wthvideo portion of the src value with the location of your files.  It should look something like this, <span class="myHighlight">&lt;script type=&quot;text/javascript&quot; src=&quot;/wp-content/2012/6/5/wthvideo.js&quot;&gt;&lt;/script&gt;</span></li>
</ul>
<p><strong>Joomla</strong>-  You need to create a custom HTML module with the title hidden. Then put the line of code into the module. You may have to switch your editor to No Editor before adding the code or it will disappear. Then assign that module to the page they want it to play on.</p>
<p><strong>Website Builder</strong>-  There is a basic logic to understanding how to install the videos.</p>
<ul>
    <li>1.  The line of code above will be inserting into your html code. This code tells the website where to look for the file with the instructions, called wthvideo.js.  This "PATH" must be correct to work.  It must point exactly to where that file is located or no video will play.</li>
    <li>2.  That file has instructions.  The instructions tell the computer the How, What, When, and Where with parameters.  If you are placing your wthvideo director anywhere but your root directory, you must make sure that the path parameter inside the wthvideo.js file points to the actual url location of the video.</li>
    <li>3.  If you are installing on a web builder or other system that forces you to place the wthvideo director folder in a place other than the root directory, you will need to make the path a "long url" (ex:http://yourdomain.com/example/example/wthvideo/) </li>
</ul>
<div class="text-center"><a href="http://websitetalkingheads.com/talking-heads-player/customize-player.php">Click Here for a Detailed Guide on Customizing Your Video Spokesperson</a></div>
</div>
</section>
<section class="container spacer">
    <h3 class="smalltext col-md-2 col-md-offset-1 text-right">Disclaimer</h3>
    <div class="smalltext col-md-8">The wthplayer and associated javascript files are copyrighted and may not be used other than with videos made by Website Talking Heads or its authorized resellers.</span></div>
</section>

<section title="footer">
    <footer>
        <h2><a href="../contact.php">© Copyright 2007-2016> WebsiteTalkingHeads.com. All Rights Reserved.</a></h2>
    </footer>
</section>
<script src="http://www.websitetalkingheads.com/create-canvas/wthvideo/download.js"></script>
</body>
</html>';

$download = $directory . '/download.html';
$Opendownload = fopen($download, 'w+');
fwrite ($Opendownload, $downloadtowrite);
fclose ($Opendownload);

?>
<section class="page-header">
  <h1>Create Zip File and Send Links</h1>
</section>
<section class="black create-files thin" >
  <form action="sendfiles.php" method="post" name="sendfiles" target="_self" class="form-horizontal">
    <input name="directory" type="hidden" value="<? echo $directory; ?>"id="directory"/>
    <input name="numberofvideos" type="hidden" id="numberofvideos" value="<? echo $numberofvideos; ?>" />
    <div class="row five-down">
      <div class="col-md-3">
        <label for="email">e-mail</label>
      </div>
      <div class="col-md-9">
        <input name="email" type="text" class="hundred-wide"  />
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-3">
        <label for="company">Company</label>
      </div>
      <div class="col-md-9">
        <input name="company" type="text" class="hundred-wide"  />
      </div>
    </div>
    <div class="row five-down">
      <div class="col-md-3">
        <label for="note">Note</label>
      </div>
      <div class="col-md-9">
        <textarea name="note" class="hundred-wide" rows="3" id="note">Thank you for your order.</textarea>
      </div>
    </div>
    <div class="row five-down center-block" align="center">
      <label for="note">For Model2Web
        <input name="model2web"  type="checkbox" />
      </label>
    </div>
    <div class="row height-padding" align="center">
    <button name="Submit" class="btn btn-primary" id="Submit">Send Files and Code</button>
    </table>
  </form>
</section>
</body>
</html>
