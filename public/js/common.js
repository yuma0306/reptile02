document.addEventListener("DOMContentLoaded", () => {
    createBurger();
    redirectToPage();
});

const redirectToPage = () => {
    const selectors = Array.from(document.getElementsByClassName('js-select-redirect'));
    selectors.forEach(selector => {
        selector.addEventListener('change', function() {
            const value = selector.value;
            value && (window.location.href = value);
        });
    });
}

const createBurger = () => {
    const burgerBtn = document.getElementById('js-burger-btn');
    const burgerMenu = document.getElementById('js-burger-menu');
    const burgerOpen = document.getElementById('js-burger-open');
    const burgerClose = document.getElementById('js-burger-close');
    burgerBtn.addEventListener('click', () => {
        burgerMenu.classList.toggle('translate-x-full');
        burgerOpen.classList.toggle('hidden');
        burgerClose.classList.toggle('hidden');
    });
}
