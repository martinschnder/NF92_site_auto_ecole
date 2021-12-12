<html>
<head>
  <title>Les des élèves</title>
  <meta CHARSET="UTF-8"/>
</head>
<body>
  <h1>Listes des élèves inscrits</h1>
  <?php
  echo '<meta charset="UTF-8"/>';
  $dbhost = 'tuxa.sme.utc';
  $dbuser = 'nf92a087';
  $dbpass = 'LmO8rtRS';

  $dbname = 'nf92a087';
  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to my sql');
  $query = "SELECT * FROM eleves";
  $result=mysqli_query($connect, $query);
  if (!$result){
  echo 'Impossible d\'exécuter la requête : ' . mysqli_error($connect);
  exit;
  }
  echo "<table>
            <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>";
  while($row=mysqli_fetch_row($result))
  {
    echo "<tr>";
    foreach($row as $col)
    {
      echo "<td>".$col."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  ?>
