<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \Philippe\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \Philippe\Blog\Model\PostManager();
    $commentManager = new \Philippe\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function comment()
{
    $commentManager = new \Philippe\Blog\Model\CommentManager();
    $comments = $commentManager->getComment($_GET['id']);

    require('view/frontend/commentView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \Philippe\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function editComment($postId, $commentId, $comment)
{
    $commentManager = new \Philippe\Blog\Model\CommentManager();

    $affectedLines = $commentManager->updateComment($commentId, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}