/* tento script sluzi na to aby .js "aktivovalo" hamburger menu pri responzivite na kliknutie => onclick event */

const hamburger = document.querySelector('.hamburger');
const navlinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');

// ak klikneme na hamburger tak sa spusti .open classa v style.css
hamburger.addEventListener('click', () => {
    navlinks.classList.toggle("open");
});