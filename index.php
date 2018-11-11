<?php

$page = @$_GET['page'];

if($page == 'home'){
    include 'pages/home.php';
}elseif($page == 'about'){
    include 'pages/about.php';
}else{
    include 'pages/404.php';
}

?>