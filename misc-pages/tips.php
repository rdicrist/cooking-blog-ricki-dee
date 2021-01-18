<?php 
// need to include path here, because its only loaded AFTER i get the header
    include('/Users/rickidicristoforo/Desktop/basic websites/CookingBlog/partials/_header.php'); 

?>


<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left recipe-sidebar" id="mySidebar">
    <a href="#tipone"  class="w3-bar-item w3-button">Tip One</a>
    <a href="#tiptwo"  class="w3-bar-item w3-button">Tip Two</a>
    <a href="#tipthree"  class="w3-bar-item w3-button">Tip Three</a>
    <a href="../index.php"  class="w3-bar-item w3-button">HOME</a>
</nav>


<!-- Recipe Blocks -->
<div class="recipe-block"> <!-- Account for sidebar -->

<hr id="tipone">
    <div class="title"><h1>Blanching!</h1></div>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="../style/images/rasplime.jpg" alt="Recipe Name">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="tips/blanch.txt" frameborder="0" height="400" width="95%"></iframe></p>
            </div>  
        </div>
    </div>
</hr>

<hr id="tiptwo">
    <div class="title"><h1>Different Tip 1!</h1></div>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="../style/images/rasplime.jpg" alt="Recipe Name">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="tips/blanch.txt" frameborder="0" height="400" width="95%"></iframe></p>
            </div>  
        </div>
    </div>
</hr>

<hr id="tipthree">
    <div class="title"><h1>Different Tip 2!</h1></div>
    <div class="recipe-row">
        <div class="recipe-picture-column">
            <img src="../style/images/rasplime.jpg" alt="Recipe Name">
        </div>
        <div class="recipe-column">
            <div class="recipe">
                <p><iframe src="tips/blanch.txt" frameborder="0" height="400" width="95%"></iframe></p>
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