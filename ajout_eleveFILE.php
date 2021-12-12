<html>
<head>
  <title>Nouvel élève</title>
  <meta CHARSET="UTF-8"/>
</head>
<body>
  Bienvenue <?php
  $prenom = $_POST["fprenom"];
  $nom = $_POST["fnom"];
  echo $prenom," ",$nom;
  $fp = fopen('eleve.txt', 'a+');
  fwrite($fp, "$prenom $nom\n");
  fclose($fp);
  ?>
</body>
