<?php include "./header.php"; ?>
    

    <div class="affichage"> Lisez</div>
<?php

require_once '../common/post.php';
// Page pour l'affichage d'un post unique
$post_id = $_GET['id'];
$post = get_post($post_id);
// echo $post['body']
?>

<section class="post">
    <h1 class="post-title"><?= $post['title']; ?></h1>
    <p class="post-body"><?= $post['body']; ?></p>
</section>

