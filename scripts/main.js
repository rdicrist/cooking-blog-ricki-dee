// Script to open and close sidebar
function sb_open(id, pushMe) {
    document.getElementById(id).style.display = "block";
    document.getElementById(pushMe).style.marginLeft = "15%";
}
    
function sb_close(id, pushMe) {
    document.getElementById(id).style.display = "none";
    document.getElementById(pushMe).style.marginLeft = "0%";
}

function sb_opposite(id, pushMe) {
    if (document.getElementById(id).style.display !== "none") {
        sb_close(id, pushMe);
    } else {
        sb_open(id, pushMe)
    };
}