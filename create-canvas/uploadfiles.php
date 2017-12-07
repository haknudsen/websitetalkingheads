<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload Files</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="https://www.websitetalkingheads.com/css/fluid.css" rel="stylesheet" type="text/css" />
<link href="https://www.websitetalkingheads.com/css/style.css" rel="stylesheet" type="text/css" />
<link href="https://www.websitetalkingheads.com/css/create-files.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/css/vendor/bootstrap.css">
<link rel="stylesheet" href="assets/css/filepicker.css">
<link rel="stylesheet" href="assets/css/file-icons.css">
<link rel="stylesheet" href="assets/css/demo.css">
<?php 
$directory = $_POST['directory'];
$numberofvideos = $_POST['numberofvideos'];
?>
</head>

<body>
<section class="page-header">
  <h1 class="text-center">Upload Files</h1>
</section>
<section class="create-files thin">
  <div class="padding-ten">
    <h2 class="text-left">Directory:
      <?=$directory?>
    </h2>
    <h2 class="text-left">Videos:
      <?=$numberofvideos?>
    </h2>
    <?php

if (file_exists($directory)) {
    echo '<h2 class="text-left">'.$directory.' already exists</h2>';
} else {
    echo '<h2 class="text-left">Directory: '.$directory.' Created</h2>';
mkdir($directory,01777,true);
mkdir($directory . '/wthvideo');
mkdir($directory . '/wthvideo/buttons');
}
copy ('wthvideo/customize-player.pdf', $directory . '/wthvideo/customize-player.pdf');
copy ('wthvideo/InstallationInstructions.pdf', $directory . '/wthvideo/InstallationInstructions.pdf');
copy ('wthvideo/buttons/click-to-play.png', $directory . '/wthvideo/buttons/click-to-play.png');
copy ('wthvideo/buttons/ExitBtn-full.png', $directory . '/wthvideo/buttons/ExitBtn-full.png');
copy ('wthvideo/buttons/ExitBtn.png', $directory . '/wthvideo/buttons/ExitBtn.png');
copy ('wthvideo/buttons/PauseBtn.png', $directory . '/wthvideo/buttons/PauseBtn.png');
copy ('wthvideo/buttons/PlayBtn.png', $directory . '/wthvideo/buttons/PlayBtn.png');
copy ('wthvideo/buttons/RestartBtn.png', $directory . '/wthvideo/buttons/RestartBtn.png');
copy ('wthvideo/buttons/VolumeBtn.png', $directory . '/wthvideo/buttons/VolumeBtn.png');
copy ('wthvideo/buttons/VolumeBtnMute.png', $directory . '/wthvideo/buttons/VolumeBtnMute.png');
?>
  </div>
</section>
<div class="container">
  <div id="main" class="col-md-9 col-md-offset-2"> 
    <!-- Start Filepicker -->
    
    <form id="filepicker" method="POST" enctype="multipart/form-data">
      <input name="directory" type="hidden" value="<?=$directory?>" id="directory" />
      <div class="btn btn-primary fileinput"> <span class="glyphicon glyphicon-plus"></span> Add files
        <input type="file" name="files[]" multiple>
      </div>
      <button type="button" class="btn btn-danger delete"> <span class="glyphicon glyphicon-trash"></span> Delete all </button>
      <br>
      <div class="drop-window fade">
        <div class="drop-window-content">
          <h3>Drop files to upload</h3>
        </div>
      </div>
    </form>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Preview</th>
            <th class="column-name">Filename</th>
            <th class="column-size">Filesize</th>
            <th class="column-date">Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="files">
        </tbody>
      </table>
    </div>
    <div class="text-center">
      <ul class="pagination pagination-sm">
      </ul>
    </div>
    
    <!-- End Filepicker --> 
  </div>
</div>
<!-- File upload template --> 
<script type="text/html" id="templateUpload">
		<tr class="fade template-upload">
			<td>
				<div class="preview">
					<span class="icon-file-<%= file.extension %>"></span>
				</div>
			</td>
			<td class="column-name">
				<p class="name"><%= file.name %></p>
				<span class="text-danger error">
					<% if (file.error) { %>
						<%= file.error %>
					<% } %>
				</span>
			</td>
			<td colspan="2">
				<p><%= file.sizeFormatted || '' %></p>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active"></div>
				</div>
			</td>
			<td>
				<% if ( ! options.autoUpload && ! file.error) { %>
					<button type="button" class="btn btn-info btn-sm start" title="Upload this file">
						<span class="glyphicon glyphicon-upload"></span>
					</button>
				<% } %>

				<button type="button" class="btn btn-warning btn-sm cancel" title="Cancel this file">
					<span class="glyphicon glyphicon-ban-circle"></span>
				</button>
			</td>
		</tr>
	</script> 

<!-- File download template --> 
<script type="text/html" id="templateDownload">
		<tr class="fade template-download">
			<td>
				<div class="preview">
					<% if (file.versions && file.versions.thumb) { %>
						<a href="<%= file.url %>" target="_blank">
							<img src="<%= file.versions.thumb.url %>" width="64" height="64"></a>
						</a>
					<% } else { %>
						<span class="icon-file-<%= file.extension %>"></span>
					<% } %>
				</div>
			</td>
			<td class="column-name">
				<p class="name">
					<% if (file.url) { %>
						<a href="<%= file.url %>" target="_blank"><%= file.name %></a>
					<% } else { %>
						<%= file.name %>
					<% } %>
				</p>

				<% if (file.error) { %>
					<span class="text-danger"><%= file.error %></span>
				<% } %>
			</td>
			<td class="column-size"><p><%= file.sizeFormatted %></p></td>
			<td class="column-date"><%= file.timeFormatted %></td>
			<td>

				<% if (file.error) { %>
					<button type="button" class="btn btn-warning btn-sm cancel" title="Cancel this file">
						<span class="glyphicon glyphicon-ban-circle"></span>
					</button>
				<% } else { %>
					<button type="button" class="btn btn-danger btn-sm delete" title="Delete this file">
						<span class="glyphicon glyphicon-trash"></span>
					</button>
				<% } %>
			</td>
		</tr>
	</script> 
<!-- JavaScript --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.filepicker.js"></script> 
<script>
		jQuery(document).ready(function($) {
			// Initialize the plugin.
			var FP = $('#filepicker').filePicker({
    			debug: true,
				url: 'uploader/index.php',
				filesList: $('.files'),
    formData: {
        dir: '<?=$directory?>/wthvideo',
    },
			});
		});

	</script>
<form class="form-horizontal"  method="post" action="set-videos.php">
  <fieldset>
    
    <!-- Form Name -->
    <input name="directory" type="hidden" value="<?=$directory?>" id="directory" />
    <input name="numberofvideos" type="hidden" value="<?=$numberofvideos?>" id="numberofvideos"  />
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="continue"></label>
      <div class="col-md-4" align="center">
        <button name="continue" class="btn btn-primary" id="continue">Continue</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>