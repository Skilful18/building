document.addEventListener('DOMContentLoaded', () => {

  var swiper = new Swiper('.swiper-container', {
    cssMode: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    speed: 300,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination'
    },
    mousewheel: true,
    keyboard: true,
  });

  let popup_let = document.getElementById('modal-calc');
  if (popup_let) {
    let delay_popup = 15000;
    setTimeout("document.getElementById('modal-calc').style.display='block'", delay_popup);
  }

  let popup_help_let = document.getElementById('modal-help');
  if (popup_help_let) {
    let delay_popup_help = 15000;
    setTimeout("document.getElementById('modal-help').style.display='block'", delay_popup_help);
  }

  let popup_Pdf_let = document.getElementById('top-bar');
  if (popup_Pdf_let) {
    let delay_popup_Pdf = 10000;
    setTimeout("document.getElementById('top-bar').style.display='block'", delay_popup_Pdf);
  }

  /* let mobile_btn = document.querySelector('.mobile-menu__btn');
  let header = document.querySelector('.header');
  mobile_btn.addEventListener('click', () => {
    header.classList.toggle('zIndex-2');
  }); */

  const form_call = document.querySelector('#form-call');
  const modal_block_list = document.querySelectorAll('.modal-block__list');

  /* Отправка формы call */
  form_call.addEventListener('submit', formSendCall);

  async function formSendCall(e) {
    e.preventDefault();

    let formDataCall = new FormData(form_call);

    modal_block_list.forEach(item => {
      item.children[1].classList.add('_sending');
    });

    let response = await fetch('/mail-call', {
      method: 'POST',
      body: formDataCall
    });

    if(response.ok) {
      let result = await response.json();
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
        item.innerHTML = result.message;
      });
      form_call.reset();
    } else {
      alert ('Ошибка');
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
      });
    }
  };

  /* Отправка формы application */

  const form_application = document.querySelector('#form-application');
  form_application.addEventListener('submit', formSendApplication);

  async function formSendApplication(e) {
    e.preventDefault();

    let formDataApplication = new FormData(form_application);

    modal_block_list.forEach(item => {
      item.children[1].classList.add('_sending');
    });

    let response = await fetch('/mail-application', {
      method: 'POST',
      body: formDataApplication
    });

    if(response.ok) {
      let result = await response.json();
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
        item.innerHTML = result.message;
      });
      form_application.reset();
    } else {
      alert ('Ошибка');
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
      });
    }
  };

  /* Отправка формы feedback */
  
  const form_feedback = document.querySelector('#form-feedback');
  form_feedback.addEventListener('submit', formSendFeedback);

  async function formSendFeedback(e) {
    e.preventDefault();

    let formDataFeedback = new FormData(form_feedback);

    modal_block_list.forEach(item => {
      item.children[1].classList.add('_sending');
    });

    let response = await fetch('/mail-feedback', {
      method: 'POST',
      body: formDataFeedback
    });

    if(response.ok) {
      let result = await response.json();
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
        item.innerHTML = result.message;
      });
      form_feedback.reset();
    } else {
      alert ('Ошибка');
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
      });
    }
  };

  /* Отправка формы mail */
  
  const form_mail = document.querySelector('#form-mail');
  form_mail.addEventListener('submit', formSendMail);
  
  async function formSendMail(e) {
    e.preventDefault();

    let formDataMail = new FormData(form_mail);

    modal_block_list.forEach(item => {
      item.children[1].classList.add('_sending');
    });

    let response = await fetch('/mail-mail', {
      method: 'POST',
      body: formDataMail
    });

    if(response.ok) {
      let result = await response.json();
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
        item.innerHTML = result.message;
      });
      form_mail.reset();
    } else {
      alert ('Ошибка');
      modal_block_list.forEach(item => {
        item.children[1].classList.remove('_sending');
      });
    }
  };

  // tabs

  var tabLinks = document.querySelectorAll(".tablinks");
  var tabContent = document.querySelectorAll(".tabcontent");

  tabLinks.forEach(function(el) {
    el.addEventListener("click", openTabs);
  });

  function openTabs(el) {
    var btnTarget = el.currentTarget;
    var country = btnTarget.dataset.country;

    tabContent.forEach(function(el) {
        el.classList.remove("active");
    });

    tabLinks.forEach(function(el) {
        el.classList.remove("active");
    });

    document.querySelector("#" + country).classList.add("active");
    
    btnTarget.classList.add("active");
  }

  /* Wrap */
  let cardTexts = document.querySelectorAll('.service-block__card-text');

  cardTexts.forEach((cardTextBlock) => {
    let buttonMore = cardTextBlock.querySelector('.service-block__card-open');
    buttonMore.addEventListener('click', () => {
      cardTextBlock.classList.toggle('active');
    });
  });

});

jQuery(document).ready(function() {
  if( ! jQuery('#canvas-zzrsby').tagcanvas({
      textFont: 'Impact,"Arial Black",sans-serif',
      textColour: '#1e73be',
      outlineColour: '#1e73be',
      reverse: true,
      textHeight:16,
      shape: "sphere", 
      depth: 0.8,decel:0.99,padding:0,
      wheelZoom: false,
      dragControl: false,
      fadeIn: 0,
      freezeActive: false,
      outlineMethod: "outline",
      outlineOffset: "5",
      outlineRadius: "0",
      outlineThickness: "2",
      maxSpeed: 0.05},'tagcloud-zzrsby')
  ){
      jQuery('#html5-cumulus-zzrsby').hide();
  }

});