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

        <div class="news">
            <h2>
                <?php echo htmlspecialchars($post['title']) ?>
                <em>le <?php echo $post['creation_date_fr'] ?></em>
            </h2>
            
            <p>
                <?php echo nl2br(htmlspecialchars($post['content'])); ?>
            </p>
        </div>

        <h3>Ajouter un commentaire</h3>

        <form action="index.php?action=addComment&amp;id=<?php echo $post['id'] ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>

        <h3>Commentaires récents</h3>

        <?php
        while ($comment = $comments->fetch()) {
            ?>
            <p><strong><?php echo htmlspecialchars($comment['author']) ?></strong> le <?php echo $comment['comment_date_fr'] ?> (<a href="index.php?action=editComment&amp;id=<?php echo $comment['id'] ?>">modifier</a>)</p>
            <p><?php echo nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>
    </body>
</html>