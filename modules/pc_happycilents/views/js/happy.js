window.addEventListener('DOMContentLoaded',()=>{

    $('.owl-carousel').owlCarousel({

        items:1 ,

        loop:true,

        slideBy:1,

        mouseDrag:true,

        margin:10,

        autoplay:true,

        nav:true,

        dots:true,
        
        navText:['<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>','<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>'],


        responsive : {
       
           
            768 : {
            items:2,
            },
            992 : {
            items:3,
            },
            1200 : {
            items:4,
            },
        },
    });

        const el1 = document.querySelector('#product-comments-list-header')
        const el2 = document.querySelector('#empty-product-comment')
        const el3 = document.querySelector('#product-comments-list')
        const el4 = document.querySelector('#product-comments-list-footer')
          const opinie = document.querySelector('.tabs #comments')
          if(!opinie){return}
        if(el1){
          opinie.appendChild(el1)
        }
        if(el2){
          opinie.appendChild(el2)
        }
        if(el3){
          opinie.appendChild(el3)
        }
        if(el4){
          opinie.appendChild(el4)
        }

})