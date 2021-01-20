<?php 
// Declare global variables, i'm including my header on every page so they will all be passed
    // $basePath = '/Desktop/basic%20websites/CookingBlog/';
    $recipePagePath = 'recipe-pages/';
    $imagePath = 'style/images/';
    $recipeTextPath = 'recipes/';
    $miscPath = 'misc-pages/';

    $cssPath = 'style/css/style.css';
    $jsPath = '/scripts/main.js'; 

    // forces refresh of css and js
    function auto_version($file='')
    {
        $t = time();
        return $file. "?". $t;
    };
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cooking ONLY!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <base href="https://cooking-blog-ricki-dee.herokuapp.com/"> -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo auto_version($cssPath); ?>" />
        <script src="<?php echo auto_version($jsPath); ?>" ></script>
        <link rel="icon" 
          type="image/png" 
          href="<?php echo $basePath; ?>style/images/logo.png" />
    </head>
</html>

