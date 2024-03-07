export function descriptionReadMore() {
   const blockCategory = document.querySelector('#js-product-list-header .block-category-inner');

   if(!blockCategory){return}//not category page
  
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

    if(!obj.content || !obj.btnReadMore || !obj.desc){return}//too short desc

    obj.btnReadMore.addEventListener('click',()=>{
      obj.changeState();
    })

}
