<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="error">
            <h2>Erreur</h2>
            
            <p>
                <?php echo $errorMessage ?>
            </p>
        </div>
    </body>
</html>