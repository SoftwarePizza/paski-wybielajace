export function btnSearchBarAction() {
    const btnSearchBar = document.querySelector('.btn-search');
    const searchWrapper = document.querySelector('.search-wrapper');
    console.log(searchWrapper);

    btnSearchBar.addEventListener("click", function(e) {
        console.log(searchWrapper);
        e.preventDefault();
        searchWrapper.classList.toggle('show');
    })

}