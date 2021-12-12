<html>
<head>
  <meta charset="UTF-8"/>
</head>
<?php
date_default_timezone_set('Europe/Paris');
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a087';
$dbpass = 'LmO8rtRS';
$dbname = 'nf92a087';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass
, $dbname) or die ('Error connecting to mysql');
$result = mysqli_query($connect,"SELECT * FROM themes WHERE supprime=0");
echo "<center><FORM METHOD='POST' ACTION='ajouter_seance.php' >";

echo "<select name='menuChoixTheme' size='4'>";
while ($row = mysqli_fetch_array($result, MYSQL_NUM))
{
  echo "<OPTION VALUE='".$row[0]."'>".$row[1]."</OPTION>";
}
echo "\n"."<br/>"."\n";
echo "Date de naissance : <input type='date' min='".date("Y-m-d")."' name='date'>"."\n";
echo "<br/>"."\n"."<INPUT type='submit' value='Enregistrer séance'>";
echo "</FORM></center>";
mysqli_close($connect);
?>
</html>
