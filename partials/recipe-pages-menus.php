<div class="header-top">
    <div class="header-top-text header">
        <ul>
            <li class="header-title-item" >MY <?php echo strtoupper($name); ?>S</li>
            <li 
                class="text-link-button header-item text-white recipe-menu-button" 
                onclick="rd_opposite('recipeDropdown', 'recipeBlock')" 
                style="display:none;">
                MENU
            </li>
            <li><a class="text-link-button header-item text-white" href="index.html" >HOME</a></li>
             
        </ul>
    </div>
</div>

<!-- recipe dropdown menu to right, doesnt display when full screen  onclick="rd_close('recipeDropdown', 'recipeBlock')" -->
<nav class="recipe-dropdown sidebar-text sidebar-animation" id="recipeDropdown" style="display:none;">
    <?php foreach ($recipeInfo as $block): ?>
        <a 
            href="recipe-pages/<?php echo $name; ?>.php?page=<?php echo $name; ?>#<?php echo $block[1]; ?>" 
            
            class="text-link-button sidebar-item recipe-sidebar-close">
            <?php echo $block[0]; ?>
        </a>
    <?php endforeach; ?>
</nav>


<!-- standard sidebar to left, doesnt display when media screen -->
<nav class="standard-sidebar sidebar-block shadow sidebar-text" id="recipeSidebar">
    <?php foreach ($recipeInfo as $block): ?>
            <a 
                href="recipe-pages/<?php echo $name; ?>.php?page=<?php echo $name; ?>#<?php echo $block[1]; ?>"  
                class="text-link-button sidebar-item ">
                <?php echo $block[0]; ?>
            </a>
    <?php endforeach; ?>
</nav>  
