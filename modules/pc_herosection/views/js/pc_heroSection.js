const heroProducts = document.querySelectorAll('#heroSection .products.heroSection .double-wrapper');
const maxItems = heroProducts.length;
const timeOut = 5000; 
let activeItem = 1;//start 1
window.addEventListener("DOMContentLoaded", () => {

    heroProducts.forEach((slide,index) => {
        slide.dataset.position = index;
    })
    heroProducts && heroProducts.length > 1 ? setTimeout(() => {heroAnimation()},timeOut) : '';
});

function heroAnimation(){

    activeItem >= maxItems ? activeItem = 0 : '';

    let oldItem = document.querySelector('.double-wrapper:not(.hide)'),
        newItem = document.querySelector('.double-wrapper[data-position="'+ activeItem++ +'"]')

        oldItem.classList.add('hide')
        setTimeout(()=>{newItem.classList.remove('hide')},250)
    
    setTimeout(heroAnimation,timeOut)
}