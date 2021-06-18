<?php 

    $indexBlocks =
    [
        ['Jam Recipes', 'jam'],
        ['Dessert Recipes', 'dessert'],
        ['Drink Recipes', 'drinks'],
        ['Pasta Recipes', 'pasta'],
        ['Snacks', 'snacks']
    ];

    include('partials/_header.php');
    
?>

<div class="header-top">
    <div class="header-top-text header">
        <ul>
            <li style="float:left;"><div class="head-button" onclick="sb_opposite('indexSidebar', 'indexBox')">☰</div></li>
            <li style="float:left;padding:15px;">My Food, By Ricki Dee</li>
        </ul>
    </div>
</div>


<!-- full screen sidebar -->
<nav class="standard-sidebar sidebar-block shadow sidebar-text sidebar-animation" style="display:none;" id="indexSidebar">
    <?php foreach ($indexBlocks as $block): ?>
        <a 
            href="<?php echo $recipePagePath. $block[1]; ?>.php?page=<?php echo $block[1]?>" 
            onclick="sb_close('indexSidebar', 'indexBox')" 
            class="text-link-button sidebar-item ">
            <?php echo $block[0]; ?>
        </a>
    <?php endforeach; ?>
    <a href="#aboutme" onclick="sb_close('indexSidebar', 'indexBox')" class="text-link-button sidebar-item">About Me</a>
    <a href="javascript:void(0)" onclick="sb_close('indexSidebar', 'indexBox')" class="text-link-button sidebar-item">Close Menu</a>
</nav> 




<!-- blocks of recipe types -->
<div class="index-box" id="indexBox">
    
    <?php foreach ($indexBlocks as $block): ?>
        <hr id="<?php echo $block[1]; ?>">
            <div class="index-recipe-block clear">
            
                <div class='container'>
                    <div class='pic-hover'>
                        <h2><?php echo $block[0]; ?></h2>
                    </div>

                    <a href="<?php echo $recipePagePath. $block[1]; ?>.php?page=<?php echo $block[1]?>">
                        <img src="<?php echo $imagePath. $block[1];?>.jpg" alt="<?php echo $block[0]; ?>" style="width:100%">
                    </a>
                    
                </div>
            
            </div>
        </hr>
    <?php endforeach; ?>



      <!-- About Section -->    
    <div class="index-block clear">
        <hr id="aboutme">
            <?php include('partials/_aboutme.php');?>
        </hr>
    </div>

    <!-- footer -->
    <div class="index-block clear">
        <?php include('partials/_footer.php');?>
    </div>

</div>

<!-- <script>
    function thisIsNormal() {
        console.log('normal js');
    };

</script>

<script type="text/javascript">
    $(document).ready(function(e) {
        console.log('jquery working');
    });

    $('body').click(function () {
    $('div#nomore').hide();
});
</script> -->