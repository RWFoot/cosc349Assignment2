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

if (mysqli_query($conn, $sql)){
  echo "Successfully added code to the playlist";
} else{
  echo "Failed to add selected code to the playlist";
  }

mysqli_close($conn);

?>
<h2><a href="http://ec2-50-19-143-239.compute-1.amazonaws.com/addpapers.php">Click here to see all papers</a></h2>
</body>
</main>
</html>