const blockCategory = document.querySelector('#js-product-list-header .block-category-inner');

  if(blockCategory){
    const obj = {
      'content' : blockCategory.querySelector('#category-description'),
      'btnReadMore' :  blockCategory.querySelector('.read-more'),
      'desc' : blockCategory.querySelector('#descFull'),
      'isOpen' : function (){return this.content.dataset.status==='close'? false : true;},
      'changeState': function(){
          this.content.innerHTML = this.isOpen() ? `<p>${this.desc.dataset.short}</p>` : `<p>${this.desc.dataset.full}</p>`;
          this.btnReadMore.querySelector('span').innerHTML = this.isOpen() ? "Czytaj więcej" : 'Czytaj mniej';
          this.content.dataset.status = this.isOpen() ? "close" : 'open';
      }
    }
 
    if(obj.content && obj.btnReadMore && obj.desc){

      obj.btnReadMore.addEventListener('click',()=>{
        obj.changeState();
      })
    }//too short desc
 
 
  }
 
 



function openSearch(button)
{
  const searchWrapper = button.parentElement.querySelector('.search-wrapper');
  searchWrapper.classList.toggle('open');

  
}
$('.owl-carousel.product-img-slider').owlCarousel({

  items:1 ,

  loop:true,

  slideBy:1,

  mouseDrag:true,

  margin:10,

  autoplay:true,

  nav:false,

  dots:true,
  
  navText:['<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>','<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>'],


});
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


//zaznaczenie płatności 
 $('#checkout-payment-step .dynamic-content').on('change',() => {
  const banks = document.querySelectorAll('.tpay-payment-gateways__item-inner');
  let isSetEvent = false;
if(banks && !isSetEvent){
  isSetEvent = true;
  banks.forEach(el =>{
    el.addEventListener('click', ()=>{
        let active = document.querySelector('.tpay-payment-gateways__item-inner[style="border-color:#1CD6A9;"')
        
        active ?  active.removeAttribute('style'):'';
        
        el.setAttribute('style','border-color:#1CD6A9;');
    });
  })
}
 })
  
var all_links = document.getElementById('category-55').getElementsByTagName("a");for(var i=0; i<1; i++){    all_links[i].removeAttribute("href");}