<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>database reader</title>
</head>

<body>

<?php
$servername = "vdb1a.pair.com";
$username = "working_35";
$password = "Zx7FD9a1";
$dbname = "working_wixMaster";
$table = "clients";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
    
?> 
</body>
</html>
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>