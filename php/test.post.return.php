<?php

//echo $_POST['prenom'] . ' ' . $_POST['nom'];

echo '<br />';

if (!empty($_POST['nom']) AND !empty($_POST['prenom']))
{
	echo htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']);
}
else
{
   echo 'Il faut renseigner un nom et un prénom';
}
?>