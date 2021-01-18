// Script to open and close sidebar
function sb_open(id) {
    document.getElementById(id).style.display = "block";
}
    
function sb_close(id) {
    document.getElementById(id).style.display = "none";
}

function sb_opposite(id) {
    if (document.getElementById(id).style.display !== "none") {
        document.getElementById(id).style.display = "none";
    } else {
        document.getElementById(id).style.display = "block";
    }
}