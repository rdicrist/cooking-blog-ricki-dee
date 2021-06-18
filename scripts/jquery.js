import './main.js';



$(document).ready(function(){
    console.log('jquery working');

    // toggles main page sidebar menu on icon click
    $('#homepageMenuToggle').click(function () {
        sb_opposite('indexSidebar', 'indexBox');
    });

    // closes main page sidebar menu on item click
    $(".home-sidebar-close" ).click(function () {
        sb_close('indexSidebar', 'indexBox');
    });

    // closes main page sidebar if you click outside the sidebar
    $('#indexBox').click(function () { 
        sb_close('indexSidebar', 'indexBox');
    });

    // closes recipe page sidebar if you click outside the sidebar  '#recipeBlock iframe'
    $('#recipeBlock, .recipe-inner-box, .recipe-iframe').click(function () { 
        rd_close('recipeDropdown', 'recipeBlock');
    });

    // closes main page sidebar menu on item click
    $(".recipe-sidebar-close" ).click(function () {
        rd_close('recipeDropdown', 'recipeBlock');
    });

    // recipe-menu-button
});
// onclick="rd_close('recipeDropdown', 'recipeBlock')" 


// onclick="sb_close('indexSidebar', 'indexBox')" 

// selects all classes
// $(".sidebar-item" ).click(function () {
//     // sb_close('indexSidebar', 'indexBox');
//     console.log('click');
// });

    // $('body').click(function () {
    // $('div#nomore').hide();
// }   );

// onclick="rd_close('recipeDropdown', 'recipeBlock')" 

// <div id="homepageMenuToggle" class="head-button" onclick="sb_opposite('indexSidebar', 'indexBox')">☰</div></li>