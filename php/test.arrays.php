<?php
/**/
$prenoms = array('John', 'Alice', 'Bill', 'Jack', 'Mary');
for ($nb = 0; $nb < 5; $nb++) {
    echo $prenoms[$nb] . '<br />';
}
var_dump($prenoms);
echo '<hr>';

foreach ($prenoms as $element) {
    echo $element . '<br />';
}

echo '<hr>';

$coordonnees = array(
    'prenom' => 'John',
    'nom' => 'Doe',
    'adresse' => '3 Rue du Port',
    'ville' => 'Toulon');

echo $coordonnees['adresse'] . '<br />';
var_dump($coordonnees);

echo '<hr>';

foreach ($coordonnees as $element) {
    echo $element . '<br />';
}



foreach ($coordonnees as $cle => $element) {
    echo $cle .' : '.$element . '<br />';
}

echo '<pre>' . print_r($coordonnees, true) . '</pre>';

echo '<hr>';

if (array_key_exists('nom', $coordonnees)) {
    echo 'La clé "nom" se trouve dans $coordonnees';
} else {
    echo 'La clé "codepostal" ne se trouve pas dans $coordonnees';
}

echo '<hr>';

if (in_array('John', $coordonnees)) {
    echo 'La valeur "John" se trouve dans $coordonnees';
}

echo '<hr>';

$res = array_search('John', $coordonnees);
echo '"John" est associé à la clé ' . $res;
/**/