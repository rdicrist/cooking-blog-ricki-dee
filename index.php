<?php 

    $indexBlocks =
    [
        ['Jam Recipes', 'jam'],
        ['Dessert Recipes', 'desserts']
    ];

    include('partials/_header.php');
    
?>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top sidebar-text w3-animate-left" style="display:none;" id="indexSidebar">
    <a href="#aboutme" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">About Me</a>
    <a href="<?php echo $recipePagePath; ?>jam.php" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Jam</a>
    <a href="javascript:void(0)" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Close Menu</a>
</nav>



<div class="w3-top">
    <div class="w3-xlarge header">
        <ul>
            <li style="float:left;"><div class="head-button" onclick="sb_opposite('indexSidebar')">☰</div></li>
            <li style="float:left;padding:15px;">My Food, By Ricki Dee</li>
        </ul>
    </div>
</div>

<!-- <?php foreach ($recipeInfo as $recipe): ?>
        <div class="recipe" style="background: url('<?php echo $imagePath. $recipe[1] ?>.jpg') repeat;">
            <div class="inner-box">
                <div class="title"><h1><?php echo $recipe[0]; ?></h1></div>
                <p><iframe src="<?php echo $recipeTextPath; ?>index.php?recipe=<?php echo $recipe[1]; ?>" frameborder="0" height="400" width="95%"></iframe></p>
                
            </div>
        </div>
    <?php endforeach; ?> -->

<div class="index-box ">
    <!-- coulmn one -->
    <div class="index-recipe-block clear">
        <hr id="jam">
            <div class='container'>
                <div class='pic-hover'>
                    <h2>Jam change!</h2>
                </div>
                <a href="<?php echo $recipePagePath; ?>jam.php?page=Jam">
                    <img src="style/images/jam.jpg" alt="Recipe Name" style="width:100%">
                </a>
                
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="jam">
            <div class='container'>
                <div class='picture'>
                    <a href="<?php echo $recipePagePath; ?>jam.php?page=Jam"><img src="style/images/jam.jpg" alt="Recipe Name" style="width:100%"></a>
                </div>
                <div class='pic-hover'>
                    <h2>Jam change!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipeone">rasp</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipetwo">banana</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipethree">peach</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="jam">
            <div class='container'>
                <div class='picture'>
                    <a href="<?php echo $recipePagePath; ?>jam.php?page=Jam"><img src="style/images/jam.jpg" alt="Recipe Name" style="width:100%"></a>
                </div>
                <div class='pic-hover'>
                    <h2>Jam change!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipeone">rasp</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipetwo">banana</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>jam.php#recipethree">peach</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>
    <!-- end recipe pics -->
</div> <!-- end index flexbox -->

      <!-- About Section -->    
<hr id="aboutme">
    <?php include('partials/_aboutme.php');?>
</hr>


<?php include('partials/_footer.php');?>
