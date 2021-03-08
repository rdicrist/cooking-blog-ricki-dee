<?php 

    $indexBlocks =
    [
        ['Jam Recipes', 'jam'],
        ['Dessert Recipes', 'desserts'],
        ['Vegetarian', 'vegetables']
    ];

    include('partials/_header.php');
    
?>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top sidebar-text w3-animate-left" style="display:none;" id="indexSidebar">
    <a href="#aboutme" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">About Me</a>
    <a href="<?php echo $recipePagePath; ?>jam.php" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Jam</a>
    <a href="javascript:void(0)" onclick="sb_close('indexSidebar')" class="w3-bar-item w3-button">Close Menu</a>
</nav>


<div class="header-top">
    <div class="header-top-text header">
        <ul>
            <li style="float:left;"><div class="head-button" onclick="sb_opposite('indexSidebar')">☰</div></li>
            <li style="float:left;padding:15px;">My Food, By Ricki Dee</li>
        </ul>
    </div>
</div>


<div class="index-box ">
    
    <?php foreach ($indexBlocks as $block): ?>
        <div class="index-recipe-block clear">
            <hr id="<?php echo $block[1]; ?>">
                <div class='container'>
                    <div class='pic-hover'>
                        <h2><?php echo $block[0]; ?></h2>
                    </div>
                    <a href="<?php echo $recipePagePath. $block[1]; ?>.php?page=<?php echo $block[1]?>">
                        <img src="<?php echo $imagePath. $block[1];?>.jpg" alt="<?php echo $block[0]; ?>" style="width:100%">
                    </a>
                    
                </div>
            </hr>
        </div>
    <?php endforeach; ?>



      <!-- About Section -->    
    <div class="index-block clear">
        <hr id="aboutme">
            <?php include('partials/_aboutme.php');?>
        </hr>
    </div>

    <div class="index-block clear">
        <?php include('partials/_footer.php');?>
    </div>

</div>


<style>
/* .w3-top{
    position:fixed;
    width:100%;
    z-index:1;
    top:0;
    left: 0;
    background-color: #EB99B8;
}


.w3-xlarge{
    font-size:24px!important
} */

/* my own header */

/* .header {
    background-color: #ECBAE4;
} */

/* .header ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.header li {
    display: inline;
} */

        .header-top {
            position:fixed;
            width:100%;
            z-index:1;
            top:0;
            left: 0;
            background-color: #EB99B8;
        }

        .header-top-text {
            font-size:24px!important
        }

        .header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;

        }

        header li {
            display: inline;
        }


</style>