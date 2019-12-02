<?php

//echo $_GET['prenom'] . ' ' . $_GET['nom'];

//echo '<br />';

if (isset($_GET['nom']) AND isset($_GET['prenom']))
{
	echo $_GET['prenom'] . ' ' . $_GET['nom'];
}
else
{
   echo 'Il faut renseigner un nom et un prénom';
}

?>