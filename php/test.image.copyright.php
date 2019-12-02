<?php
header ("Content-type: image/jpeg");

// Images
$source = imagecreatefrompng("../images/copyright.png");
$destination = imagecreatefromjpeg("../images/coucherdesoleil.jpg");

// Dimensions
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// Placement de l'image source au centre de la destination
$destination_x = $largeur_destination/2 + $largeur_source/2 - $largeur_source;
$destination_y =  $hauteur_destination/2 + $hauteur_source/2 - $hauteur_source;

// Fusion des images
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);

// Affichage
imagejpeg($destination);

// Enregistrement
imagejpeg($destination, "../images/imagefinale.jpeg");
?>