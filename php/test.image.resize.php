<?php
header ("Content-type: image/jpeg");

// Images
$source = imagecreatefromjpeg("../images/coucherdesoleil.jpg");
$destination = imagecreatetruecolor(200, 150); // Miniature vide

// Dimensions
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// Création de la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// Affichage
imagejpeg($destination);

// Enregistrement
imagejpeg($destination, "../images/mini_couchersoleil.jpg");
?>