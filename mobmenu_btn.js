function openMenu(){
    const menuMobile = document.getElementById('navbarSupportedContent');
    if(!menuMobile) return;
    menuMobile.classList.add('active');

}

const headerToggleBtn = document.getElementById('header-toggle');
if(headerToggleBtn) {
    headerToggleBtn.addEventListener('click',  openMenu);
}

function closeMenu(){
    const menuMobile = document.getElementById('navbarSupportedContent');
    if(!menuMobile) return;
    menuMobile.classList.remove('active');
}
const closeMenuBtn = document.getElementById('header-close-menu-btn');
if(closeMenuBtn){
    closeMenuBtn.addEventListener('click', closeMenu);
}