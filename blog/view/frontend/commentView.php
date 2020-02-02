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

        <div class="editcomment">
            <h2>Modifier le commentaire</h2>
            
            <h3>Contenu</h3>
            <p>
            <?php
            $comment = $comments->fetch();
            echo htmlspecialchars($comment['comment']) ?>
            </p>
        

            <h3>Nouveau contenu</h3>

            <form action="index.php?action=editComment&amp;id=<?php echo $comment['id'] ?>" method="post">
                <div>
                    <input type="hidden" name="post_id" value="<?php echo $comment['post_id'] ?>">
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment"></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
        </div>
        
    </body>
</html>