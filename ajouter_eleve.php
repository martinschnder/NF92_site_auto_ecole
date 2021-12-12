<html>
<head>
  <title>Nouvel élève</title>
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
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$dateNaiss = $_POST["dateNaiss"];
$query = "insert into eleves values (NULL,'$nom','$prenom','$email','$dateNaiss')";
echo "<br>$query<br>";
$result  =  mysqli_query($connect,  $query);
if (!$result) { echo "<br>pas bon".mysqli_error($connect);}
mysqli_close($connect);
?>
</html>
