<?php /* Page pour la liste des posts */ ?>
<?php session_start(); ?>
<?php include "./header.php"; ?>
    <p class="userName">
        Votre nom: 
        <?php 
        if(isset($_SESSION['username'])){
            echo $_SESSION['username']; 
        }

        if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true){
            echo " [Admin]";
          ?>
          <a class="NewPost" href= "/php-start12/site/newPost.php">Create a new post </a> 
          
        



          <?php
          
        }
        ?>

    </p>
    <?php
    require_once '../common/post.php';
    ?>
    <ul>
        <?php
        $array = get_posts();
        $cpt = 0;
        foreach ($array as $value){ ?>
       <div class="post-item">
            <h3><a href="/php-start12/site/post.php?id=<?= $cpt ?>"> <?= $value['title']; ?> </a></h3>
            <p> <?= $value['body']; ?> </p>
        </div>
        <?php  
        ++$cpt;
        } // endforeach
        ?>

    </ul>
</body>
</html>