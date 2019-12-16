<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=greta;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['firstName']) &&
!empty($_POST['lastName']) &&
!empty($_POST['username']) &&
!empty($_POST['email']) &&
!empty($_POST['address']) &&
!empty($_POST['address2']) &&
!empty($_POST['country']) &&
!empty($_POST['state']) &&
!empty($_POST['zip']) &&
!empty($_POST['paymentMethod']) &&
!empty($_POST['cc-name']) &&
!empty($_POST['cc-number']) &&
!empty($_POST['cc-expiration']) &&
!empty($_POST['cc-cvv'])) 
{
    echo 'tout est rempli';
    $prenom_client = htmlspecialchars($_POST['firstName']);
    $nom_client = htmlspecialchars($_POST['lastName']);
    $email_client = htmlspecialchars($_POST['email']);
    $surnom_client = htmlspecialchars($_POST['username']);
    $adresse_client = htmlspecialchars($_POST['address']);
    $adresse2_client = htmlspecialchars($_POST['address2']);
    $pays_client = htmlspecialchars($_POST['country']);
    $etat_client = htmlspecialchars($_POST['state']);
    $zip_client = htmlspecialchars($_POST['zip']);
    $meme_adresse_client = (isset($_POST['same-address']))? true : false;
    $enregistrer_client = (isset($_POST['save-info']))? true : false;
    $mode_paiement_client = $_POST['paymentMethod'];
    $cc_nom_client = htmlspecialchars($_POST['cc-name']);
    $cc_num_client = htmlspecialchars($_POST['cc-number']);
    $cc_exp_client = htmlspecialchars($_POST['cc-expiration']);
    $cc_cvv_client = htmlspecialchars($_POST['cc-cvv']);
} else {
    echo 'Il faut remplir tous les champs';
}
