<!DOCTYPE HTML>
<html>
<main>
<head>
<title>Add codes Page</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$db_host   = 'my-db.ckzsari5voi4.us-east-1.rds.amazonaws.com';
$db_name   = 'testdb';
$db_user   = 'admin';
$db_passwd = 'password123';

$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if(!$conn){
  die("Connection Error: " . mysql_error());
}

$code = $_POST['code'];
$name = $_POST['name'];

$sql = "INSERT INTO papers (paperCode, name) VALUES('$code', '$name')";


mysqli_close($conn);

?>
<h2><a href="http://ec2-3-83-234-238.compute-1.amazonaws.com/index.php">Click here to see all papers</a></h2>
</body>
</main>
</html>

