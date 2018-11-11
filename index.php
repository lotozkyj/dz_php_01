<?php

$page = @$_GET['page'];

if($page == 'home'){
    include 'inc/header.php';
    include 'pages/home.php';
}elseif($page == 'about'){
    include 'inc/header.php';
    include 'pages/about.php';
}elseif($page == 'contact'){
    include 'inc/header.php';
    include 'pages/contact.php';
}elseif($page == ''){
    include 'inc/header.php';
    include 'pages/home.php';
}else{
    include 'inc/header.php';
    include 'pages/404.php';
}


?>