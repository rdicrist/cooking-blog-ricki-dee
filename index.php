<?php include('partials/_header.php');?>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top sidebar-text w3-animate-left" style="display:none;" id="indexSidebar">
    
    <!-- change / remove these links -->
    <a href="#jam" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Recipe One</a>
    <a href="#recipetwo" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Recipe Two</a>
    <a href="#recipethree" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Recipe Three</a>
    <!-- change / remove these links -->
    <a href="#aboutme" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">About Me</a>
    <a href="<?php echo $recipePagePath; ?>jam.php" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Jam</a>
    <a href="javascript:void(0)" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Close Menu</a>
</nav>



<div class="w3-top">
    <div class="w3-xlarge header">
        <ul>
            <li style="float:left;"><div class="head-button" onclick="sb_open('indexSidebar')">☰</div></li>
            <li style="float:left;padding:15px;">My Food, By Ricki Dee</li>
        </ul>
    </div>
</div>

<div class="index-box">
    <!-- coulmn one -->
    <div class="index-recipe-block clear">
        <hr id="jam">
            <div class='container'>
                <div class='picture'>
                    <a href="<?php echo $recipePagePath; ?>jam.php"><img src="style/images/jam.jpg" alt="Recipe Name" style="width:100%"></a>
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
        <hr id="crockpot">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/crockpot.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Crockpot Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">crockpot1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">crockpot2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">crockpot3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="dessert">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/desserts.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Dessert Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">dessert1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">dessert2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">dessert3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <!-- column two -->
    <div class="index-recipe-block clear">
        <!-- Recipe blocks -->
        <hr id="veggie">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/vegetables.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Veggie Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>veggie.php#recipeone">veggie1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>veggie.php#recipetwo">veggie2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>veggie.php#recipethree">veggie3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="veggie2">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/vegetables.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Crockpot Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">crockpot1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">crockpot2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">crockpot3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="veggie2">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/vegetables.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Crockpot Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">crockpot1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">crockpot2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">crockpot3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="veggie2">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/vegetables.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Crockpot Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">crockpot1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">crockpot2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">crockpot3</a></li>
                    </ul>
                </div>
            </div>
        </hr>
    </div>

    <div class="index-recipe-block clear">
        <hr id="veggie2">
        <div class='container'>
            <div class='picture'>
                <a href="<?php echo $recipePagePath; ?>crockpot.php"><img src="style/images/vegetables.jpg" alt="Recipe Name" style="width:100%"></a>
            </div>
            <div class='pic-hover'>
                <h2>Crockpot Recipes!</h2>
                    <ul>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipeone">crockpot1</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipetwo">crockpot2</a></li>
                        <li><a href="<?php echo $recipePagePath; ?>crockpot.php#recipethree">crockpot3</a></li>
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
