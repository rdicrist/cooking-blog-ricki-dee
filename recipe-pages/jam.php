<?php 
    // title, imgsource/recipesource (dont include filetype)
    $recipeInfo = [
                ['Raspberry Lime Jam!', 'rasplime'],
                ['Banana Jam!', 'banana'],
                ['Peach "Cin" Jam!', 'peachcin']
            ];

    $name = $_GET['page'];
?>


<?php include('../partials/_header.php');?>

<?php include('../partials/recipe-pages-menus.php');?>


<!-- TODO: fix mobile sidebar -->
<div class="sidebar-mobile" id="mobileSidebar">
    <ul>
        <li><a href="../index.php">HOME</a></li>
        <li class="jam-dropdown">
            <a href="javascript:void(0)" class="jam-dropdown-btn">Jam</a>
            <div class="jam-dropdown-content" id="jamDropdownContent">
                <a href="#recipeone">Raspberry Lime</a>
                <a href="#recipetwo">Banana</a>
                <a href="#recipethree">Peach "Cin"</a>
            </div>
        </li>
    </ul>
</div>

<!-- put into recipepage partial, reference vars defined in file (same name) -->
<!-- Recipe Blocks -->
<div class="recipe-block">

    <?php foreach ($recipeInfo as $recipe): ?>
        <div class="recipe" style="background: url('<?php echo $imagePath. $recipe[1] ?>.jpg') repeat;">
            <hr id="<?php echo $recipe[1]; ?>">
                <div class="recipe-inner-box">
                    <div class="title"><h1><?php echo $recipe[0]; ?></h1></div>

                    <p>
                        <!-- < ?php include(  '../recipes/index.php'); ?> -->
                        <iframe src="<?php echo $recipeTextPath; ?>index.php?recipe=<?php echo $recipe[1]; ?>" 
                            frameborder="0" 
                            class="recipe-iframe">
                        </iframe>
                    </p>
                </div>
            </hr>
        </div>
        
    <?php endforeach; ?>

    <!-- <a href="< ?php echo $miscPath; ?>tips.php#tipthree">Click here for info on peeling the peaches!</a>  -->
    <!-- put above inside peachcin file -->
    
    <?php include('../partials/_footer.php');?>
    
   
 </div> <!-- end recipe blocks  -->


 <style>

        .recipe-iframe {
            height: 400px;
            width: 95%;
        }

        @media screen and (max-width: 800px) {  
            .recipe-iframe {
                /* position: absolute;
                height: 100%; */
                /* overflow: hidden; */
/* width: 860px; */
height: 800px;
/* position: absolute; */
                
            }
        }

 </style>


