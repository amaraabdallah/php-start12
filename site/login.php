<?php
require_once '../common/auth.php';
require_once './utils.php';

if(!isset($_POST['username']) || !isset($_POST['password'])){
    redirect_to('index.php');
    return;
}

if(do_login($_POST['username'], $_POST['password'])){
    redirect_to('posts.php');
}else{
    redirect_to('index.php');
}