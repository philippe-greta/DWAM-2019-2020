<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page 2</title>
    </head>
    <body>
    <p>
        Bonjour <?php echo $_SESSION['name'].' '.$_SESSION['surname']; ?>
    </p>
    <p>
        <a href="test.sessions.1.php">Page 1</a>
    </p>
    <pre>
    <?php print_r ($_SESSION); ?>
    </pre>
    </body>
</html>