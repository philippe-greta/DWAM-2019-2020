<?php
session_start();

$_SESSION['name'] = 'Jane';
$_SESSION['surname'] = 'Doe';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page 1</title>
    </head>
    <body>
    <p>
        Bonjour <?php echo $_SESSION['name'].' '.$_SESSION['surname']; ?>
    </p>
    <p>
        <a href="test.sessions.2.php">Page 2</a>
    </p>
    </body>
</html>