<!-- put into recipepage partial, reference vars defined in file (same name) -->
<!-- Recipe Blocks -->

<?php if (empty($recipeInfo)):
    echo "
    
    <div class='recipe-block' id='recipeBlock'>
    <h3>This page is under construction!</h3>
    </div> ";

else:
?>

<div class="recipe-block" id="recipeBlock">

    <?php foreach ($recipeInfo as $recipe): 
        // if ($recipe[1]) {
// put in check for in array here
        // };
        
        ?>
        <div class="recipe" style="background: url('<?php echo $imagePath. $recipe[1] ?>.jpg') repeat;">
            <hr id="<?php echo $recipe[1]; ?>">
                <div class="recipe-inner-box">
                    <div class="title"><h1><?php echo $recipe[0]; ?></h1></div>
                <p>
                    <iframe allowtransparency="true" style="background: white;" src="<?php echo $recipeTextPath; ?>index.php?recipe=<?php echo $name. '/'. $recipe[1]; ?>" 
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

 <?php endif; ?>