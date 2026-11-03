// document.addEventListener('DOMContentLoaded', function () {

//     let formNewsletter = document.getElementById('formNewsletter');
//     let emailInput = document.querySelector('#newsletter_email');

//     emailInput.addEventListener('input', function () {
//         let parent = emailInput.parentElement;
//         let errorMsg = parent.querySelector('.errorMsg');
//         errorMsg.textContent = "";
//     })

    

//     formNewsletter.addEventListener('submit', function (event) {
//         event.preventDefault();

//         let errorMsg = this.querySelector('.errorMsg');
//         let emailInput = this.querySelector('#newsletter_email');
        
//         if (emailInput.value.trim() === "") {
//             errorMsg.classList.remove('d-none');
//             return;
//         }

//         let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//         if (!emailPattern.test(emailInput.value)) {
//             errorMsg.textContent = "Моля въведете валиден формат на имейла";
//             return;
//         }

        

//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': document.querySelector('._token').value
//             }
//         });


//         let dataInput = {
//             email_input: emailInput.value
//         }
        

//         $.ajax({
//             url: '/newsletter_subscribe',
//             type: 'POST',
//             dataType: 'json',
//             data: dataInput,
//             success: function (response) {

//                 let backgroundSuccess = document.querySelector('.backgroundSuccess')

//                 if(response.status === "failExists") { 
//                     errorMsg.textContent = "Този имейл вече съществува в нашата система";
//                     return;
//                 } else if (response.status === "successSub") { 
//                     emailInput.value = "";
//                     backgroundSuccess.style.display = "flex";
//                 }
                


//             },
//             error: function (xhr, status, error) {
//                 console.error("AJAX error:", error, xhr.responseText); // Handle error
//             }
//         });

//     });




// })