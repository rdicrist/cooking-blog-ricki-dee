<?php 
    // title, imgsource/recipesource (dont include filetype)
    $recipeInfo = [
                ['Raspberry Lime Jam!', 'rasplime'],
                ['Banana Jam!', 'banana'],
                ['Peach "Cin" Jam!', 'peachcin']
            ];

    $name = $_GET['page'];
?>
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
            <div class="inner-box">
                <div class="title"><h1><?php echo $recipe[0]; ?></h1></div>
                <p><iframe src="<?php echo $recipeTextPath; ?>index.php?recipe=<?php echo $recipe[1]; ?>" frameborder="0" height="400" width="95%"></iframe></p>
                <!-- <p><iframe src="< ?php echo $recipeTextPath; ?>banana.html" frameborder="0" height="400" width="95%"></iframe></p> -->
            </div>
        </div>
    <?php endforeach; ?>

    <!-- <a href="< ?php echo $miscPath; ?>tips.php#tipthree">Click here for info on peeling the peaches!</a>  -->
    <!-- put above inside peachcin file -->
    
    <?php include('../partials/_footer.php');?>
    
   
 </div> <!-- end recipe blocks  -->


