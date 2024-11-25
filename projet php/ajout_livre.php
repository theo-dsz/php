<?php

@include("connecte.php");
$référence_du_livre = $_POST['reference_livre'];
$nombre_pages = $_POST['nombre_pages'];
$auteur = $_POST['id_auteur'];
$date_publication = $_POST['date_publication'];
$genre = $_POST['genre'];
$disponibilité = $_POST['disponibilite'];
$nombre_emprunt = $_POST['nombre_emprunt'];
$etat = $_POST['etat'];
$nombre_exemplaire = $_POST['nombre_exemplaire'];

$requete = "INSERT INTO livres VALUES ('$reference_livre','$nombre_pages','$id_auteur','$date_publication','$genre','$disponibilite','$nombre_emprunt','$etat','$nombre_exemplaire')";

$rl= mysqli_query($conn,$requete);

echo "<center><p>Ajout OK</p></center>";
echo '<center><a href="index.html">Retour</a></center>';

mysqli_close($conn)

?>

