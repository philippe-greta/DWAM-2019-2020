<?php

/*CONNEXION*/

// $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', '');
// $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
    $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

/*SELECT*/
/**/

$res = $bdd->query('SELECT * FROM clients');

/*
$row = $res->fetch();
echo  $row['nom_client'] . ' ' . $row['prenom_client'] . ' ' . $row['email_client'] . '<br />';
*/

while ($row = $res->fetch()) {
    echo  $row['nom_client'] . ' ' . $row['prenom_client'] . ' ' . $row['email_client'] . '<br />';
}

$res->closeCursor();



/**/
$res = $bdd->query('SELECT nom_client,prenom_client FROM clients WHERE nom_client="Doe"');

while ($row = $res->fetch()) {
    echo  $row['nom_client'] . ' ' . $row['prenom_client'] . '<br />';
}

$res->closeCursor();



/* PREPARE SELECT */
/**/
$res = $bdd->prepare('SELECT nom_client,prenom_client FROM clients WHERE nom_client = :nom');

$res->execute(array('nom' => "Doe")); // $_POST['name'] ou $name

while ($row = $res->fetch()) {
    echo  $row['nom_client'] . ' ' . $row['prenom_client'] . '<br />';
}

$res->closeCursor();


/*INSERT*/
/*
$bdd->exec('INSERT INTO clients(id, prenom_client, nom_client, email_client) VALUES(\'\', \'Marie\', \'Blanc\', \'marie@blanc.com\')');
*/


/* PREPARE INSERT */
/*
$res = $bdd->prepare('INSERT INTO clients(id, prenom_client, nom_client, email_client) VALUES(\'\', :prenom, :nom, :email)');

$res->execute(array(
    'prenom' => 'Pierre', // $_POST['name'] ou $name
    'nom' => 'Dupont',
    'email' => 'pierre@dupont.com'
    ));

$res->closeCursor();
*/

/* UPDATE */
/*
$bdd->exec('UPDATE clients SET prenom_client = \'Anne\', nom_client = \'White\', email_client = \'anne@white.com\'  WHERE id = 6');
*/

/* PREPARE UPDATE */
/*
$req = $bdd->prepare('UPDATE clients SET prenom_client = :nvprenom, nom_client = :nvnom, email_client = :nvmail WHERE id = 7');
$req->execute(array(
    'nvprenom' => 'Paul',
    'nvnom' => 'White',
    'nvmail' => 'paul@white.com'
    ));

$res->closeCursor();
*/

/*DELETE*/
/*
$bdd->exec('DELETE FROM clients WHERE nom_client=\'BLANC\'');

$res = $bdd->query('SELECT nom_client,prenom_client FROM clients');

while ($row = $res->fetch())
{
    echo  $row['nom_client'] . ' ' . $row['prenom_client'] . '<br />';
}
*/
