const model = document.querySelector(".model");
const previews = document.querySelectorAll(".gallery img");
const original = document.querySelector(".full-img");
const imgText = document.querySelector('.caption')


previews.forEach((preview) => {
    preview.addEventListener('click', () => {
        model.classList.add('open');
        //  original.style.transform = "scale(2)";
        original.classList.add('open');
        //dynamicke zmeny obrazku 
        const originalSource = preview.getAttribute('data-original');
        original.src = `./full/${originalSource}`;

    });
});

model.addEventListener('click', (e) => {
    if (e.target.classList.contains('model')) {
        model.classList.remove('open');
        original.classList.remove('open');
    }
});