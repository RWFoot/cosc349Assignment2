<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<main>
<head>
<title>Papers</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>papers</h1>

<p></p>

<table border="1">
<tr><th>Code</th><th>Name</th></tr>
<?php 

$db_host   = 'my-db.ckzsari5voi4.us-east-1.rds.amazonaws.com';
$db_name   = 'testdb';
$db_user   = 'admin';
$db_passwd = 'password123';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
$q = $pdo->query("SELECT * FROM papers");

while($row = $q->fetch()){
  echo "<tr><td>".$row["paperCode"]."</td><td>".$row["name"]."</td></tr>\n";
}
?>


</table>
</body>
</main>
</html>