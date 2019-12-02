<?php
function maFonction($nb1, $nb2)
{
    $result = $nb1 * $nb2;
    $message = $nb1.' * '.$nb2.' = '.$result;
    echo $message.'<br />';
}

maFonction(5, 3);

echo date('d/m/Y h:i:s'). '<br />';

setlocale(LC_ALL, 'fr_FR');
echo strftime("%A %e %B %Y");
