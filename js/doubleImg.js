/* script na zmenu velkosti obrazka */
img = document.getElementById("gallery-review");

function resizeMyGallery() {
    // Tu sa obrazok zvacsi na 2 nasobnu velkost
    img.style.transform = "scale(2)";
    img.style.transition = "transform 0.25s ease";
}
// Zresetovanie obrazka na povodnu velkost
function resetMyGallery() {
    img.style.transform = "scale(1)";
    img.style.transition = "transform 0.25s ease";
}