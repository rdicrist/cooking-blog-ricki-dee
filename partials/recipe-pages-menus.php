<div class="header-top">
    <div class="header-top-text header">
        <ul>
            <li><a class="text-link-button header-item header-home-item text-white" href="index.html" >HOME</a></li>
            <li class="header-item" >My <?php echo $name; ?>s, By Ricki Dee</li>
        </ul>
    </div>
</div>



<nav class="standard-sidebar sidebar-block shadow sidebar-text" id="recipeSidebar">
    <?php foreach ($recipeInfo as $block): ?>
            <a 
                href="recipe-pages/<?php echo $name; ?>.php?page=<?php echo $name; ?>#<?php echo $block[1]; ?>"  
                class="text-link-button sidebar-item ">
                <?php echo $block[0]; ?>
            </a>
        </hr>
    <?php endforeach; ?>
</nav>  

<style>




</style>