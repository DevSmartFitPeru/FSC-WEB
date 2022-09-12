
popupWhatsApp = () => {
  
  let btnClosePopup = document.querySelector('.closePopup');
  let btnOpenPopup = document.querySelector('.whatsapp-button');
  let popup = document.querySelector('.popup-whatsapp');
  let sendBtn = document.getElementById('send-btn');
  //let numArea = document.getElementById('numArea');


  btnClosePopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
  })
  
  btnOpenPopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
     popup.style.animation = "fadeIn .6s 0.0s both";
  })
  
  // sendBtn.addEventListener("click", () => {
  // let msg = document.getElementById('whats-in').value;
  // let tlf = document.getElementById('numArea').value;
  // let relmsg = msg.replace(/ /g,"%20");
  
     
  // window.open('https://web.whatsapp.com/send?phone='+tlf+'&text='+relmsg, '_blank'); 
  // });

 

  setTimeout(() => {
    popup.classList.toggle('is-active-whatsapp-popup');
  }, 2000);
}

popupWhatsApp();

$("#send-btn").click(function(){
  let tlf = $("#numArea").val();
  let msg = $("#whats-in").val();

  if (tlf != '' && msg != '') {
    let relmsg = msg.replace(/ /g,"%20");
    window.open('https://api.whatsapp.com/send?phone='+tlf+'&text='+relmsg, '_blank'); 
  } else {
   
    Swal.fire(
      'Complete los campos!',
      'Seleccion el area y/o escriba el mensaje',
      'error'
    );
    
  }
})
