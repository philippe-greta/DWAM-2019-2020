<?php
$autorisation = false;
$level = 5;

if ($autorisation == true && $level == 3) {
    echo "Bienvenue";
} elseif ($autorisation == true && $level != 3) {
    echo "Niveau insuffisant";
} elseif ($autorisation == false) {
    echo "Accès refusé";
}
?>

<hr>

<?php
$note = 2;

switch ($note) {
    case 0:
        echo('note vaut 0');
        break;
    case 1:
        echo('note vaut 1');
        break;
    case 2:
        echo('note vaut 2');
        break;
}
?>

<hr>

<?php
$a = 5;
$res = ($a >= 3) ? true : false;
echo $res;
?>