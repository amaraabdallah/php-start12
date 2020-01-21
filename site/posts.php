<?php /* Page pour la liste des posts */ ?>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site | Web 1.0</title>
</head>

<body>
    <p>
        Votre nom: 
        <?php 
        if(isset($_SESSION['username'])){
            echo $_SESSION['username']; 
        }
        ?>

    </p>
    <?php
    require_once '../common/post.php';
    ?>
    <ul>
        <?php
        $array = get_posts();
        foreach ($array as $value){ ?>
        <li>
            <h3> <?= $value['title']; ?> </h3>
            <p> <?= $value['body']; ?> </p>
        </li>
        <?php  } ?>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Posts
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> <a
                                    href="/php-start12/site/post.php?id=1">MON LIEN DE POST 1 HACK</a></h5>

        </button>
                </div>
                                        <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><a
                                    href="/php-start12/site/post.php?id=2">MON LIEN DE POST 2 HACK</a></button>
                                <button type="button" class="btn btn-primary"><a href="/php-start12/site/post.php?id=3">MON LIEN DE POST 3 HACK</a></button>
        
                        </div>
                    </div>
                </div>
            </div>
                                 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </ul>
</body>

</html>