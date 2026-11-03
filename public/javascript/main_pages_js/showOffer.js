document.addEventListener('DOMContentLoaded', function () { 
    showModal();
});

function showModal() { 
    let button = document.querySelectorAll('.checkOffer');
    let background = document.querySelector('.offerBackground');
    let offerModal = document.querySelector('.offerModal');
    let xClose = document.querySelector('.fa-x');


    button.forEach(btn => { 

    btn.addEventListener('click', function () { 
        background.style.display = "flex";
        
        offerModal.classList.remove('animate__fadeOutDown');
        offerModal.classList.add('animate__fadeInUp');
    });

    xClose.addEventListener('click', function () { 

        offerModal.classList.remove('animate__fadeInUp');
        offerModal.classList.add('animate__fadeOutDown');

        setTimeout(function () { 
          
            background.style.display = "none"; 
        }, 800);
    });

})

}
