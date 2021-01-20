<?php 
    // title, imgsource/recipesource (dont include filetype)
    $recipeInfo = [
                ['Raspberry Lime Jam!', 'rasplime'],
                ['Banana Jam!', 'banana'],
                ['Peach "Cin" Jam!', 'peachcin']
            ];

    $name = $_GET['page'];
    echo 'this page is called'. $name;


?>

<?php include('../partials/_header.php');?>
<?php include('../partials/recipe-pages-menus.php');?>

<!-- Sidebar (static / no close option) -->
<!-- <nav class="w3-sidebar w3-bar-block w3-card w3-top sidebar-text" id="indexSidebar">
    <a href="#aboutme" class="w3-bar-item w3-button">About Me</a>
    <a href="< ?php echo $recipePagePath; ?>jam.php" class="w3-bar-item w3-button">Jam</a>
    <a href="/index.php"  class="w3-bar-item w3-button">HOME</a>
</nav>

<div class="w3-top">
    <div class="w3-xlarge header">
        <ul>
            <li style="float:left;padding:15px;">My Jams, By Ricki Dee</li>
        </ul>
    </div>
</div> -->

<style>
    #recipeone {
        background: url("<?php echo $imagePath; ?>rasplime.jpg") repeat;
        border: 2px solid black;
    }

    .inner-box {
        margin: 30px;
        background-color: #ffffff;
        border: 1px solid black;
        opacity: 0.6;
    }

    .inner-box p {
        margin: 5%;
        font-weight: bold;
        color: #000000;
    }
</style>

<!-- < ?php for ()?> -->

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

<!-- need to make div id (both) / h1 / iframe src dynamic, just repeat using for loop 
same class for all though, can use the same css
wait no, need different img tages
dynamic css?
need better css here
seperate css page just for the img
can i have a css function ?
generic css class with all the other stuff, formatted css #class just for background img ?-->
    <div id="recipeone">
        <div class="inner-box">
            <div class="title"><h1>Raspberry Lime Jam!</h1></div>
            <p><iframe src="<?php echo $recipeTextPath; ?>rasplime.txt" frameborder="0" height="400" width="95%"></iframe></p>
        </div>
    </div>

    <hr id="recipetwo">
        <div class="title"><h1>Banana Jam!</h1></div>
        <div class="recipe-row">
            <div class="recipe-picture-column">
                <img src="/style/images/banana.jpg" alt="Recipe Name" style="width:100%">
            </div>
            <div class="recipe-column">
                <div class="recipe">
                    <p><iframe src="/recipes/banana.txt" frameborder="0" height="400" width="95%"></iframe></p>
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

<?php include('/Users/rickidicristoforo/Desktop/basic websites/CookingBlog/partials/_footer.php');?>