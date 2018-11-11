<?php

$page = @$_GET['page'];

if($page == 'home'){
    include 'inc/header.php';
    include 'pages/home.php';
}elseif($page == 'about'){
    include 'inc/header.php';
    include 'pages/about.php';
}else{
    include 'inc/header.php';
    include 'pages/404.php';
}


?>