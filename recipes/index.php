<?php 
    include('../partials/_header.php');

    $recipe = $_GET['recipe'];

    include($recipe. '.html');
    
?>