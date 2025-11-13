document.addEventListener('DOMContentLoaded', function() {
    /*=============== SHOW MENU ===============*/
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');

    if (navToggle) {
        navToggle.addEventListener('click', () => {
           navMenu.classList.add('show-menu');
        });
    }
    if (navClose) {
        navClose.addEventListener('click', () => {
           navMenu.classList.remove('show-menu');
        });
    }

    /*=============== SLIDER JAVASCRIPT ===============*/
    const nextDom = document.getElementById('next');
    const prevDom = document.getElementById('prev');
    const carouselDom = document.querySelector('.carousel');

    if (!carouselDom || !nextDom || !prevDom) return;

    const imageListDom = carouselDom.querySelector('.list-image');
    const contentListDom = carouselDom.querySelector('.list-content');

    if (!imageListDom || !contentListDom) return;

    const animationDuration = 700;
    const timeAutoNext = 7000;
    let runNextAuto;

    function showSlider(type) {
        prevDom.style.pointerEvents = 'none';
        nextDom.style.pointerEvents = 'none';

        const imageItems = imageListDom.querySelectorAll('.item');
        const contentItems = contentListDom.querySelectorAll('.item');

        if (type === 'next') {
            carouselDom.classList.add   ('next');
            setTimeout(() => {
                imageListDom.appendChild(imageItems[0]);
                contentListDom.appendChild(contentItems[0]);
                carouselDom.classList.remove('next');
                prevDom.style.pointerEvents = 'auto';
                nextDom.style.pointerEvents = 'auto';
            }, animationDuration);
        } else { // type === 'prev'
            imageListDom.prepend(imageItems[imageItems.length - 1]);
            contentListDom.prepend(contentItems[contentItems.length - 1]);
            carouselDom.classList.add('prev');
            setTimeout(() => {
                carouselDom.classList.remove('prev');
                prevDom.style.pointerEvents = 'auto';
                nextDom.style.pointerEvents = 'auto';
            }, animationDuration);
        }

        clearTimeout(runNextAuto);
        runNextAuto = setTimeout(() => {
            nextDom.click();
        }, timeAutoNext);
    }

    nextDom.addEventListener('click', () => showSlider('next'));
    prevDom.addEventListener('click', () => showSlider('prev'));

    runNextAuto = setTimeout(() => {
        nextDom.click();
    }, timeAutoNext);
});