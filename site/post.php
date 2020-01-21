<?php

require_once '../common/post.php';
// Page pour l'affichage d'un post unique
$post_id = $_GET['id'];
$posts = get_posts();

//@TODO