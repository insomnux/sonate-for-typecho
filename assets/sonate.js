/* Menu toggle */
let button = document.querySelector('.toggle');
let navCont = document.querySelector('.nav_cont');
let topHead = document.querySelector('.top_header');
button.addEventListener('click', () => {
  navCont.classList.toggle('toggled');
  button.classList.toggle('btn_toggled');
  topHead.classList.toggle('autoh');
});
