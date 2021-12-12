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
$query = "SELECT * FROM eleves WHERE nom='$nom' and prenom='$prenom'";
echo "$query";
$result  =  mysqli_query($connect,  $query);
if ($row=$result->fetch_array()){

    echo "<br>Cet élève...";
    echo "<form method='POST' action='ajouter_eleve.php'>
    <input type='hidden' name='nom' value='$nom'/>
    <input type='hidden' name='prenom' value='$prenom'/>
    <input type='hidden' name='email' value='$email'/>
    <input type='hidden' name='dateNaiss' value='$dateNaiss'/>
    <button type='submit'>Ajouter quand même</button>
    <button type='submit' formaction='ajout_eleve.html>Annuler</button>
    </form>
    ";

}
else {

    $query2 = "insert into eleves values (NULL,'$nom','$prenom','$email','$dateNaiss')";
    $result2  =  mysqli_query($connect,  $query2);
    echo "$query2";
}
?>
