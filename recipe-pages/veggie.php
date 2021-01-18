<?php 
// need to include path here, because its only loaded AFTER i get the header
    include('/Users/rickidicristoforo/Desktop/basic websites/CookingBlog/partials/_header.php'); 
?>
    

<!-- Sidebar, FIXED 
TODO: get the header to deal with it better , get the entire page to shift to deal with it -->

<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" id="mySidebar">
    <a href="#recipeone"  class="w3-bar-item w3-button">Veggie Recipe One</a>
    <a href="#recipetwo"  class="w3-bar-item w3-button">Veggie Recipe Two</a>
    <a href="#recipethree"  class="w3-bar-item w3-button">Veggie Recipe Three</a>
    <a href="../index.php"  class="w3-bar-item w3-button">HOME</a>
</nav>

<div class="w3-top">
    <div class="w3-white w3-xlarge header">
        <ul>
        <!-- <li style="float:left;"><div class="head-button" onclick="sb_open()">☰</div></li> -->
        <!-- <li style="float:left;"><div class="head-button">☰</div></li> -->
        <li style="float:right;padding:15px;">My Food</li>
        <li style="float:right;padding:15px;">Ricki Dee</li>
        </ul>
    </div>
</div>

<!-- Recipe Blocks -->

<hr id="recipeone">
    <img src="../style/images/ex.jpg" alt="Recipe Name" style="width:500px">
    <div class="title"><h1>Veggie Recipe One!</h1></div>
    <div class="recipe">
        <p><iframe src="recipes/raspberrylime.txt" frameborder="0" height="400" width="95%"></iframe></p>
    </div>  
</hr>

<hr id="recipetwo">
    <img src="../style/images/ex.jpg" alt="Recipe Name" style="width:500px">
    <div class="title"><h1>Veggie Recipe One!</h1></div>
    <div class="recipe">
        <p><iframe src="recipes/raspberrylime.txt" frameborder="0" height="400" width="95%"></iframe></p>
    </div>  
</hr>

<hr id="recipethree">
    <img src="../style/images/ex.jpg" alt="Recipe Name" style="width:500px">
    <div class="title"><h1>Veggie Recipe One!</h1></div>
    <div class="recipe">
        <p><iframe src="recipes/raspberrylime.txt" frameborder="0" height="400" width="95%"></iframe></p>
    </div>  
</hr>


<footer>
    <div class="footer">
        <p>&copy; Ricki DiCristoforo 2020</p>
    </div>
</footer>