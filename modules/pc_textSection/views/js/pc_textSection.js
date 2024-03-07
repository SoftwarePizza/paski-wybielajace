
const btnAction = document.querySelector('.btn-collapse');
const textCollapsed = document.querySelector('.wrapper-text');

if(btnAction) {
    btnAction.addEventListener( "click", function(e) {
        textCollapsed.classList.toggle("open");
    
        if(textCollapsed.classList.contains("open")){
            btnAction.innerHTML = "Zwiń >"
        } else {
            btnAction.innerHTML = "Rozwiń >"
        }
    });
};
