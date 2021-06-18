<?php 
    // title, imgsource/recipesource (dont include filetype)
    $recipeInfo = [
                ['Avocado Patty!', 'avo_patty'],
                ['Buffalo Cauliflour Dip!', 'buffalo_dip'],
                ['Baked Avocado!', 'baked_avo'],
                
                // ['Peach "Cin" Jam!', 'peachcin'],
                // ['Cranberry Holiday Jam!', 'cranberry']
            ];

    $name = $_GET['page'];
?>


<?php include('../partials/_header.php');?>

<?php include('../partials/recipe-pages-menus.php');?>

<?php include('../partials/_recipe-list.php');?>