<?php
require_once '../common/post.php';
require_once './utils.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    // Si je suis là, le formulaire a été envoyé
    
    //@TODO: Check isset...
    create_post($_POST["title"], $_POST["body"]);

    redirect_to("posts.php");
}

// Sinon, on affiche la page de création d'un post
?>
<?php include "./header.php"; ?>

<form method="POST">
    <label>
        <h1>Titre</h1> <input class="newTitle" type="text" name="title" />
    </label>
    <label>
        <h1>votre post</h1> <input class="newBody" type="text" name="body" />
    </label>
    <button type="submit">soumettre</button>
</form>
    