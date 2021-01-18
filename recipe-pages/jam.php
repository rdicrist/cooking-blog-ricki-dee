<?php 
// need to include path here, because its only loaded AFTER i get the header
    include('/Users/rickidicristoforo/Desktop/basic websites/CookingBlog/partials/_header.php'); 

?>


<!-- Sidebar, FIXED 
TODO: get the header to deal with it better , get the entire page to shift to deal with it 
get sidebar words to shrink with size changes
image as background instead of next to it-->
<div class="sidebar-standard">
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left recipe-sidebar" id="mySidebar">
        <a href="#recipeone"  class="w3-bar-item w3-button">Jam Recipe One</a>
        <a href="#recipetwo"  class="w3-bar-item w3-button">Jam Recipe Two</a>
        <a href="#recipethree"  class="w3-bar-item w3-button">Jam Recipe Three</a>
        <a href="<?php echo $basePath; ?>index.php"  class="w3-bar-item w3-button">HOME</a>
    </nav>
</div>

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

<!-- Recipe Blocks -->
<div class="recipe-block"> <!-- Account for sidebar -->

<hr id="recipeone">
    <div class="title"><h1>Raspberry Lime Jam!</h1></div>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="<?php echo $imagePath; ?>rasplime.jpg" alt="Recipe Name">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="<?php echo $recipeTextPath; ?>raspberrylime.txt" frameborder="0" height="400" width="95%"></iframe></p>
            </div>  
        </div>
    </div>
</hr>

<hr id="recipetwo">
    <div class="title"><h1>Banana Jam!</h1></div>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="<?php echo $imagePath; ?>banana.jpg" alt="Recipe Name" style="width:100%">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="<?php echo $recipeTextPath; ?>banana.txt" frameborder="0" height="400" width="95%"></iframe></p>
            </div>  
        </div>
    </div>
</hr>

<hr id="recipethree">
    <div class="title"><h1>Peach "Cin" Jam!</h1></div>
    <a href="<?php echo $miscPath; ?>tips.php#tipthree">Click here for info on peeling the peaches!</a>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="<?php echo $imagePath; ?>peachcin.jpeg" alt="Recipe Name" style="width:100%">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="<?php echo $recipeTextPath; ?>peachcin.txt" frameborder="0" height="400" width="95%"></iframe></p>
            </div>  
        </div>
    </div>
</hr>
</div> <!-- for width-->

<footer>
    <div class="footer">
        <p>&copy; Ricki DiCristoforo 2020</p>
    </div>
</footer>

<!-- </body>
</html> -->
