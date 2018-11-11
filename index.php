<?php

$page = @$_GET['page'];

if($page == 'home'){
    include 'pages/home.php';
}else{
    include 'pages/404.php';
}

?>