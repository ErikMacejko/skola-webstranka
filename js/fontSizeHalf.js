function increaseFontSize() {
    txt = document.getElementById('resize');
    style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
    txt.style.fontSize = (parseFloat(style) * 1.5) + 'px';

}


function decreaseFontSize() {
    txt = document.getElementById('resize');
    style = window.getComputedStyle(txt, null).getPropertyValue('font-size');
    txt.style.fontSize = (parseFloat(style) / 1.5) + 'px';

}