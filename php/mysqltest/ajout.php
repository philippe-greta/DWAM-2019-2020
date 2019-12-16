<?php

// $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
    $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['email']);

    $res = $bdd->prepare('INSERT INTO clients(prenom_client, nom_client, email_client) VALUES(:prenom, :nom, :email)');

    $res->execute(array(
    'prenom' => $prenom, // $_POST['name'] ou $name
    'nom' => $nom,
    'email' => $mail
    ));

    $res->closeCursor();
} else {
    echo 'Il faut remplir tous les champs';
}

$res = $bdd->query('SELECT * FROM clients');

while ($row = $res->fetch()) {
    echo  $row['nom_client'] . ' ' . $row['prenom_client'] . ' ' . $row['email_client'] . '<br />';
}

$res->closeCursor();
