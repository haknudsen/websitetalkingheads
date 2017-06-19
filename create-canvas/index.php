<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Files and Code</title>
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

<section class="page-header">
  <h1>Create Files and Code</h1>
</section>
<section class="create-files wide">
<form class="form-horizontal"  id="form1" name="form1" method="post" action="uploadfiles.php">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="directory">Project Name</label>  
  <div class="col-sm-8">
  <input name="directory" class="form-control input-md" id="directory" required="" type="text" placeholder="Directory">
  <span class="help-block">name of project</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sm-4 control-label" for="numberofvideos">Number of Videos</label>  
  <div class="col-sm-8">
  <input name="numberofvideos" class="form-control input-md" id="numberofvideos" required="" type="text" placeholder="Number of videos" value="1">
  <span class="help-block">1 video = 1 flv and 1 mp4</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="Submit"></label>
  <div class="col-sm-4">
    <button name="Submit" class="btn btn-primary" id="Submit">Submit</button>
  </div>
</div>

</fieldset>
</form>
</section>
<section class="container">
	<div class="spacer" align="center">
	<iframe width="960" height="540" src="https://www.youtube.com/embed/0_GJLdxQyRg" frameborder="0" allowfullscreen></iframe>
    </div>
</section>
</body>
</html>
