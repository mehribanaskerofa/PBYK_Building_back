function menubar(){

    let menu = document.querySelector(".header-menu");
    let menuBar = document.querySelector("#menu-bar");
    let headerMenu = document.querySelector("#headers");
    
        if (menuBar.classList.contains('dflex')) {
            menuBar.classList.remove('dflex');
            headerMenu.classList.remove('header-btn-class')
            menu.classList.remove('menu-color');
            
        } else {
            menuBar.classList.add('dflex');
            headerMenu.classList.add('header-btn-class')
            menu.classList.add('menu-color');
        }
}
