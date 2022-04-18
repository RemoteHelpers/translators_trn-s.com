'use strict';


document.querySelectorAll('.title_wrap').forEach((el) => {
  el.addEventListener('click', () => {
    let content = el.nextElementSibling;
    if (content.style.maxHeight) {
      document.querySelectorAll('.content_wrap').forEach((el) => el.style.maxHeight = null);
    } else {
      document.querySelectorAll('.content_wrap').forEach((el) => el.style.maxHeight = null);
      content.style.maxHeight = content.scrollHeight + 'px'
    }
  })
})



// burger 

let burger = document.querySelector('.burger');

if (burger) {
  const burgerMenu = document.querySelector('.burger_content');
  burger.addEventListener('click', () => {
    burgerMenu.classList.toggle('_active');
    burger.classList.toggle('_active');
    document.body.classList.toggle('_lock');
  })
}