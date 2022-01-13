
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
//.header__navbar {
//     display: flex;
//     /*justify-content: space-between;*/
//     align-items: center;
//
// }
// .toggle-btn,
// .toggle-close {
//     display: none;
//     background-repeat: no-repeat;
//     background-color: transparent;
//     background-position: center;
//     margin: 0;
//     padding: 0;
//     cursor: pointer;
// }
// .toggle-btn {
//     width: 40px;
//     height: 40px;
//     border: 1px solid #CBA46C;
//     border-radius: 4px;
//     background-color: transparent;
//     background-image: url('images/toggler_btn.svg');
// }
// .toggle-close {
//     position: absolute;
//     top: 50px;
//     right: 50px;
//     width: 30px;
//     height: 30px;
//     border:none;
//     outline:none !important;
//     background-image: url('images/closeButtonMenu.svg');
//     background-size: cover;
// }

//
// @media (max-width: 768px) {
// .header__nav {
//         display: flex;
//         position: absolute;
//         left: 0;
//         top: 0;
//         width: 100%;
//         height: 100vh;
//         justify-content: center;
//         align-items: center;
//         z-index: 99999;
//         background: white;
//         transition: 0.3s;
//         opacity:0;
//         visibility: hidden;
//     }
// .header__nav.active {
//         opacity:1;
//         visibility: visible;
//     }
// .header__navbar{
//         justify-content: flex-start;
//     }
// .toggle-btn {
//         margin-left:20px;
//         display: inline-block;
//     }
// .toggle-close{
//         display: block;
//     }
//
//