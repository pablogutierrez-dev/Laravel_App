const iconMenu = document.getElementById('icon_menu');
const menu = document.getElementById('menu');
const closeMenu = document.getElementById('close_icon');

iconMenu.addEventListener('click', () => {
  iconMenu.classList.add('iconshow');
  menu.classList.add('menushow');
})

closeMenu.addEventListener('click', () => {
  menu.classList.remove('menushow');
  iconMenu.classList.remove('iconshow');
})