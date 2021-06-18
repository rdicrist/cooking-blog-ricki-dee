import './main.js';



$(document).ready(function(){
    console.log('jquery working');

    // toggles main page sidebar menu on icon click
    $('#homepageMenuToggle').click(function () {
        sb_opposite('indexSidebar', 'indexBox');
    });

    // $("#homepageCloseMenu" ).click(function () {
    //     // console.log('side click');
    //     sb_close('indexSidebar', 'indexBox');
    // });

});



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