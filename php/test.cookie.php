<?php 

//setcookie('name', 'John', time() + 3600);

// setcookie ( string $name [, string $value = "" [, int $expires = 0 [, string $path = "" [, 
// string $domain = "" [, bool $secure = FALSE [, bool $httponly = FALSE ]]]]]] ) : bool

setcookie('name', 'John', time() + 3600, null, null, false, true);



echo $_COOKIE['name'];

echo '<pre>' . print_r($_COOKIE, true) . '</pre>';



?>