<html>
<head>
  <meta CHARSET="UTF-8"/>
</head>
<body>
  <?php
  date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a087';
$dbpass = 'LmO8rtRS';
$dbname = 'nf92a087';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass
, $dbname) or die ('Error connecting
to mysql');
$themeseance = $_POST["menuChoixTheme"];
$query = "insert into themes values (NULL,'$theme','$date','$heure')";
echo "<br>$query<br>";
$result  =  mysqli_query($connect,  $query);
if (!$result) { echo "<br>pas bon".mysqli_error($connect);}
mysqli_close($connect);
