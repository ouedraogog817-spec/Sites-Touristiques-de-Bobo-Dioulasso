<?php

$nom = $_POST['FirstName'];
$prenom = $_POST['LastName'];
$sexe = $_POST['sexe'];
$age = $_POST['hold'];
$TEL = $_POST['tlphone'];
$MAIL = $_POST['email'];
$PAYS = $_POST['country'];
$VILLE = $_POST['city'];
$MOTIF = $_POST['motif'];
$DUREE = $_POST['DEFSEJ'];
$CHAMBRES = $_POST['chambre'];
$NOMBRE = $_POST['Nchambre'];

$ligne = $nom . ";" . $prenom . ";" . $sexe . ";" . $age .";" .  $TEL .";" .  $MAIL .";" .  $PAYS .";" .  $VILLE .";" .  $MOTIF .";" .  $DUREE .";" .  $CHAMBRES .";" .  $NOMBRE . "\n";

file_put_contents("reservations.txt", $ligne, FILE_APPEND);

echo "Réservation enregistrée avec succès.";

?>