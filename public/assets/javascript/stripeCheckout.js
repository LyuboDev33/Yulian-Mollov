// const stripe1 = Stripe('pk_test_51QCPzHJ14oeQYtXPyTPLTyVXQGRwR4TYl6w1zo4Qc9s0FX3WZ7JYddQR0973tQvD3ctTjIZISvqpuBWas42ZWJuZ008jCccZdC');

document.addEventListener('DOMContentLoaded', () => {
    rangeInput();
    inputsKeyUp();

const stripe1 = Stripe('pk_live_51QEBfDGBUEBHTd3S3Ds6B6izZbRuvrnPmYXzLgVjc4YM1I7bUtiMsOIOyKJN2uyVgXFkkhxiAwQ3JvA6GvoFPuD7003VR8XkcN');

    // Initialize Stripe Elements
    // const elements = stripe1.elements();
    // const cardNumber = elements.create('cardNumber', { placeholder: "Номер на картата" });
    // const cardCVC = elements.create('cardCvc', { placeholder: "CVC код" });
    // const cardExpiry = elements.create('cardExpiry', { placeholder: "MM / ГГ" });

    // cardNumber.mount('#card-number-element');
    // cardCVC.mount("#card-cvc-element");
    // cardExpiry.mount('#card-expiry-element');

    // Form submission handler
    $('#payment-form').on('submit', function (event) {
        event.preventDefault();

        firstPayment();


    });

   
    // Function for one payment
    function firstPayment(donationPercentage) {
        stripe1.createPaymentMethod({
            type: 'card',
            card: cardNumber // Ensure cardNumber is a valid Stripe element
        }).then(function (result) {
            
            if (result.error) {
                handleStripeError(result.error.code);
            } else {
                const paymentMethodId = result.paymentMethod.id; // Extract the payment method ID
                const donationPercentage = parseInt($('.percentageDonate').text().replace('%', ''), 10);

                let campaignPrice = parseFloat(document.querySelector('.campaignPrice').textContent);
                let platformPrice = parseFloat(document.querySelector('.platformPrice').textContent);

                let stripeAmount = (campaignPrice + platformPrice).toFixed(2);
                let checkbox__trigger = document.querySelector('.checkbox__trigger')

         


                // Collecting the necessary data for the backend
                const data = {
                    names: $("#names").val(),
                    email: $('#email').val(),
                    anonymousUser: checkbox__trigger.checked,
                    amount: stripeAmount,
                    percentage: donationPercentage,
                    hiddenID: $('#hiddenID').val(),
                    paymentMethodId1: paymentMethodId
                };                
            

                let verified = true;

                if (data.names === "") {
                    let parent = document.getElementById('names').parentElement;
                    parent.querySelector('.inputError').textContent = "Това поле е задължително";
                    verified = false;
                }
                if (data.email === "") {
                    let parent = document.getElementById('email').parentElement;
                    parent.querySelector('.inputError').textContent = "Това поле е задължително";
                    verified = false;
                }
                if (data.amount === "") {
                    let parent = document.getElementById('amount').parentElement;
                    parent.querySelector('.inputError').textContent = "Това поле е задължително";
                    verified = false;
                } else if (data.amount < 1) {
                    let parent = document.getElementById('amount').parentElement;
                    parent.querySelector('.inputError').textContent = "Минималната сума за дарение е 1.00 евро";
                    verified = false;
                }


                const preloader = document.getElementById('preloader');
                const waitingMessage = document.getElementById('waitingMessage');
                const successMessaage = document.getElementById('successMessage');
                        
          
                if (verified) {
                    // Uncomment this if preloader is needed
                    preloader.style.display = "flex";

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // Making the AJAX request to the /checkout endpoint
                    $.ajax({
                        url: '/checkout-platform-donation',
                        type: 'POST',
                        dataType: 'json',
                        data: data,
                        success: function (response) {


                            
                            if (response.success === true) {
                                const paymentId1 = response.data.id;
                                const percentage = response.percent;
                                const personNames = response.names;
                                const personEmail = response.email;
                                const anonymousUser = response.anonymousUser;

                                let paymentId2 = null;
                                if (response.dataSecond) {
                                    paymentId2 = response.dataSecond.id;
                                }

                                // Now proceed to update the amount after the payment has been confirmed in the backend
                                let dataList = {
                                    paymentID1: paymentId1,
                                    paymentID2: paymentId2,
                                    percentageUpdate: percentage,
                                    personName: personNames,
                                    personEmail: personEmail,
                                    anonymousUser: anonymousUser,
                                    hiddenID: $('#hiddenID').val()
                                };

                                $.ajax({
                                    url: '/update-amount',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: dataList,
                                    success: function (responseInner) {

                                        console.log(responseInner);
                                        

                                        waitingMessage.style.display = "none";
                                        successMessaage.style.display = "flex";

                                        let reloadBtn = document.querySelector('.reloadBtn');
                                        reloadBtn.addEventListener('click', function () {
                                            window.location.reload();
                                        });

                                        let timeleft = 60;
                                        let downloadTimer = setInterval(function () {
                                            if (timeleft <= 0) {
                                                clearInterval(downloadTimer);
                                                window.location.reload();
                                            } else {
                                                document.getElementById("countdown").innerHTML =
                                                    "Страницата ще се опресни след " + timeleft + " секунди";
                                            }
                                            timeleft -= 1;
                                        }, 1000);
                                    }
                                });

                            } else {
                                $('#card-errors').text('Нещо се обърка с плащането.');
                            }
                        },
                        error: function (xhr, status, error) {
                            // Handling 400 or other errors
                            const errorMsg = xhr.responseJSON?.message || 'Възникна грешка при изпращането на заявката.';
                            $('#card-errors').text(errorMsg);
                        }
                    });
                }
            }
        }).catch(function (error) {
            $('#card-errors').text(error.message);
        });
    }


    function handleStripeError(error) {
        let errorMessage;
        switch (error) {
            case 'incomplete_number':
                errorMessage = 'Не сте въвели номер на карта.';
                break;
            case 'invalid_number':
                errorMessage = 'Номерът на картата е невалиден.';
                break;
            case 'incomplete':
                errorMessage = 'Номерът на картата е непълен.';
                break;
            case 'card_error':
                errorMessage = 'Възникна грешка с картата.';
                break;
            case 'insufficient_funds':
                errorMessage = 'Нямате достатъчно наличност в картата за да направите плащането.';
                break;
            case 'expired_card':
                errorMessage = 'Картата ви е изтекла. Моля, въведете нова карта.';
                break;
            case 'incomplete_cvc':
                errorMessage = 'Полето CVC код е задължително.';
                break;
            case 'incorrect_cvc':
                errorMessage = 'CVC кодът е неправилен.';
                break;
            case "invalid_expiry_month":
                errorMessage = 'Невалидна месец на изтичане.';
                break;
            case "invalid_expiry_year":
                errorMessage = 'Невалидна година на изтичане.';
                break;
            case 'processing_error':
                errorMessage = 'Възникна проблем при обработката на плащането. Опитайте отново.';
                break;
            case 'authentication_required':
                errorMessage = 'Това плащане изисква допълнително удостоверяване. Моля, проверете при вашата банка.';
                break;
            default:
                errorMessage = 'Това поле е задължително.';
        }
        $('#card-errors').text(errorMessage);

    }

    function inputsKeyUp() {
        // Handle the 'amount' field logic
        const amount = document.getElementById('amount');
        const campaignPrice = document.querySelector('.campaignPrice');
        const platformPrice = document.querySelector('.platformPrice');
        const frontEndTotal = document.querySelector('.frontEndTotal');
    
        if (amount) {
            amount.addEventListener('input', function (e) {
                const value = Number(e.target.value); // Convert input to number
                const maxAmount = Number(this.getAttribute('max')); // Get max amount
                const parent = e.target.parentElement.parentElement;
                const errorMsg = parent.querySelector('.maxAmountError'); // Target error message
                const percentage = parseInt(parent.querySelector('.percentageDonate').textContent);
                const getValRange = Number(document.querySelector('.range input').value); // Ensure correct value usage

                campaignPrice.textContent = `${value.toFixed(2)} EUR`;
                platformPrice.textContent = `${((value / 100) * percentage).toFixed(2)} EUR`;
                
                  frontEndTotal.textContent = 
                `${(parseFloat(platformPrice.textContent) 
                + parseFloat(campaignPrice.textContent)).toFixed(2)} EUR`
                
                // Perform calculations only if the value exceeds maxAmount
                if (value > maxAmount) {
                    this.value = maxAmount; // Set the input value to maxAmount
                    campaignPrice.textContent = `${maxAmount.toFixed(2)} EUR`; // Set campaign price
                    platformPrice.textContent = `${((maxAmount / 100) * getValRange).toFixed(2)} EUR`; // Set platform price
                    frontEndTotal.textContent = `${(parseFloat(platformPrice.textContent) + parseFloat(campaignPrice.textContent)).toFixed(2)} EUR`; // Update total
                    
                    errorMsg.textContent = `Максималната сума която можете да въведете е ${maxAmount}`; // Show error message
                } else {
                    errorMsg.textContent = ""; // Clear error message if value is within range
                }
            });
        }
    }
    

   function rangeInput() {
        let platformPrice = document.querySelector('.platformPrice');
        let campaignPrice = document.querySelector('.campaignPrice');
        let frontEndTotal = document.querySelector('.frontEndTotal');
    
        $('.range input').on('input', function () {
    
            var getValRange = $(this).val();
            let inputValue = parseFloat(campaignPrice.textContent);
            platformPrice.innerHTML = `${((inputValue / 100) * getValRange).toFixed(2)} EUR`;

            frontEndTotal.textContent = 
            `${(parseFloat(platformPrice.textContent) 
            + parseFloat(campaignPrice.textContent)).toFixed(2)} EUR`;
            
            $('.range span').text(getValRange + '%');
        });
    }
    

});