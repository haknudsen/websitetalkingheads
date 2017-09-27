<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Send link</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="../css/fluid.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css?v=<?php echo rand(1,100); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php include ('../includes/header.php'); ?>
<section class="container">
  <div class="col-md-6 col-md-offset-3">
    <form id="form1" name="form1" method="post" action="sendfiles.php">
      <label for="email">E-mail address
        <input name="email" type="text" tabindex="1" size="50" maxlength="50" />
      </label>
      <label for="company">Company Name
        <input name="company" type="text" tabindex="2" size="50" maxlength="50" />
      </label>
      <label for="directory"> Directory name
        <input name="directory" type="text" id="directory" tabindex="3" size="50" maxlength="50" />
         </label>this is in filesandcode
      <label for="numberofvideos"># of videos
        <input name="numberofvideos" type="text" id="numberofvideos" tabindex="4" value="1" size="4" maxlength="4" />
      </label>
      <label for="message"> Message
        <input name="message" type="text" id="message" tabindex="5" size="120" maxlength="150" />
      </label>
      <div align="center">
        <input name="Submit" type="submit" id="Submit" tabindex="6" value="Submit" />
      </div>
    </form>
    </table>
  </div>
</section>
    <?php include ('../includes/footer.php'); ?>
</body>
</html>
