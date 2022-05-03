'use strict';

document.addEventListener("DOMContentLoaded", function (event) {
  const swiper = new Swiper('.mySwiper', {
    navigation: {
      nextEl: '.next_swiper_btn',
      prevEl: '.prev_swiper_btn',
    },
    // loop: true,
    // autoplay: {
    //   delay: 3000,
    // },
    breakpoints: {
      0: {
        enabled: true,
        slidesPerView: 1.5,
        speed: 500,
      },
      768: {
        speed: 500,
        slidesPerView: 2.5,
      }
    }
  });


  // Полифил для forEach (для старых браузеров)
  if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
      thisArg = thisArg || window;
      for (var i = 0; i < this.length; i++) {
        callback.call(thisArg, this[i], i, this);
      }
    };
  }

  // Реализация custom dropdown
  document.querySelectorAll('.dropdown').forEach(function (dropdownWrapper) {


    const dropdownBtn = dropdownWrapper.querySelector('.dropdown_button'),
      dropdownList = dropdownWrapper.querySelector('.industry_dropdown_list'),
      dropdownListItem = dropdownList.querySelectorAll('.industry_dropdown_item'),
      dropdownInputHidden = dropdownWrapper.querySelector('.dropdown_input_hidden');

    dropdownWrapper.addEventListener('click', function (event) {
      event.preventDefault();
    })

    dropdownBtn.addEventListener('click', function () {
      dropdownList.classList.toggle('industry_dropdown_list-visible');
    })

    dropdownListItem.forEach(function (listItem) {
      listItem.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdownBtn.innerText = this.innerText;
        dropdownList.classList.remove('industry_dropdown_list-visible');
        dropdownInputHidden.value = this.dataset.value;
      })
    })

    document.addEventListener('click', function (e) {
      if (e.target !== dropdownBtn) {
        dropdownList.classList.remove('industry_dropdown_list-visible');
      }
    })

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Tab' || e.key === 'Escape') {
        dropdownList.classList.remove('industry_dropdown_list-visible');
      }
    })
  });


  // active card
  const firstCard = document.querySelector('.first_mobile_card_wrapper'),
    secondCard = document.querySelector('.second_mobile_card_wrapper');


  firstCard.addEventListener('click', function () {
    firstCard.classList.toggle('active_card');
  });
  secondCard.addEventListener('click', function () {
    secondCard.classList.toggle('active_card');
  });



  // sending form data
  const form = document.querySelector('#form');

  form.addEventListener('submit', formSend);

  async function formSend(e) {
    e.preventDefault();
  }


});




