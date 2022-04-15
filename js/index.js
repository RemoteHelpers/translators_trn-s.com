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
    document.querySelectorAll('.fa-caret-right').forEach((el) => {
      el.classList.toggle('rotate')
    })
  })
})



