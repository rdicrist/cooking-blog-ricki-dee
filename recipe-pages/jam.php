<?php 
    // title, imgsource/recipesource (dont include filetype)
    $recipeInfo = [
                ['Raspberry Lime Jam!', 'rasplime'],
                ['Banana Jam!', 'banana'],
                ['Peach "Cin" Jam!', 'peachcin'],
                ['Cranberry Holiday Jam!', 'cranberry']
            ];

    $name = $_GET['page'];
?>


<?php include('../partials/_header.php');?>

<?php include('../partials/recipe-pages-menus.php');?>



<!-- put into recipepage partial, reference vars defined in file (same name) -->
<!-- Recipe Blocks -->
<div class="recipe-block" id="recipeBlock">

    <?php foreach ($recipeInfo as $recipe): ?>
        <div class="recipe" style="background: url('<?php echo $imagePath. $recipe[1] ?>.jpg') repeat;">
            <hr id="<?php echo $recipe[1]; ?>">
                <div class="recipe-inner-box">
                    <div class="title"><h1><?php echo $recipe[0]; ?></h1></div>
                <p>
                    <iframe allowtransparency="true" style="background: white;" src="<?php echo $recipeTextPath; ?>index.php?recipe=jam/<?php echo $recipe[1]; ?>" 
                        frameborder="0" 
                        scrolling="no" 
                        width="95%"
                        onload="resizeIframe(this)"
                        >
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



