document.addEventListener('DOMContentLoaded', () => {
  rangeInput();
  inputsKeyUp();

  $('#payment-form-old').on('submit', function (event) {
    event.preventDefault();

    const donationPercentage = parseInt($('.percentageDonate').text().replace('%', ''), 10);

    let campaignPrice = parseFloat(document.querySelector('.campaignPrice').textContent);
    let platformPrice = parseFloat(document.querySelector('.platformPrice').textContent);
    let stripeAmount = (campaignPrice + platformPrice).toFixed(2);
    let checkbox__trigger = document.querySelector('.checkbox__trigger');

    const data = {
      names: $("#names").val(),
      email: $('#email').val(),
      anonymousUser: checkbox__trigger.checked,
      amount: stripeAmount,
      percentage: donationPercentage,
      hiddenID: $('#hiddenID').val(),
    };

    let verified = true;

    if (data.names === "") {
      let parent = document.getElementById('names').parentElement;
      parent.querySelector('.inputError').classList.remove('d-none');
      verified = false;
    }
    if (data.email === "") {
      let parent = document.getElementById('email').parentElement;
      parent.querySelector('.inputError').classList.remove('d-none');
      verified = false;
    }

    if (data.amount === "") {
      let parent = document.getElementById('amount').parentElement;
      parent.querySelector('.inputError').classList.remove('d-none');
      verified = false;
    } else if (data.amount < 1) {
      let parent = document.getElementById('amount').parentElement;
      parent.querySelector('.inputError.minAmount').classList.remove('d-none');
      verified = false;
    }

    if (verified) { 
      expressPayment(data);
    } else {
      document.getElementById('spanTop').scrollIntoView();
    }
  });

  // ⛔ HANDLE if user comes back after PayPal payment
  const urlParams = new URLSearchParams(window.location.search);
  const paymentIntentId = urlParams.get('payment_intent');
  const paymentClientSecret = urlParams.get('payment_intent_client_secret');

  if (paymentIntentId && paymentClientSecret) {
   
    // Get previous saved data
    const percentageUpdate = localStorage.getItem('percentageUpdate');
    const personName = localStorage.getItem('personName');
    const personEmail = localStorage.getItem('personEmail');
    const anonymousUser = localStorage.getItem('anonymousUser');
    const hiddenID = localStorage.getItem('hiddenID');

    // Show preloader
    document.getElementById('preloader').style.display = "flex";

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: '/update-amount',
      method: 'POST',
      dataType: 'json',
      data: {
        paymentID1: paymentIntentId,
        percentageUpdate: percentageUpdate,
        personName: personName,
        personEmail: personEmail,
        anonymousUser: anonymousUser,
        hiddenID: hiddenID
      },
      success: function (response) {

        // ⛔ Or if you want to clear ALL (everything):
        localStorage.clear();
       
        document.getElementById('waitingMessage').style.display = "none";
        document.getElementById('successMessage').style.display = "flex";

        let reloadBtn = document.querySelector('.reloadBtn');
        reloadBtn.addEventListener('click', function () {
          window.location.href = window.location.origin + window.location.pathname;
        });

        let timeleft = 60;
        let downloadTimer = setInterval(function () {
          if (timeleft <= 0) {
            clearInterval(downloadTimer);
            window.location.href = window.location.origin + window.location.pathname;
          } else {
            document.getElementById("countdown").innerHTML =
              "Page reload in " + timeleft + " seconds";
          }
          timeleft -= 1;
        }, 1000);
      }
    });
  }
});

function expressPayment(dataInputs) {
  const stripe1 = Stripe('pk_live_51QCPzHJ14oeQYtXPs718lzSJFUf3lLnA2NX3ywpWw2QXNpruPQSRxMOl0mDBX8VJQ2fge8FKtlgTkonj3A5w4TyV00OVwbeoG9', { 
    locale: 'bg'
  });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    url: '/checkout-express-donation',
    type: 'POST',
    data: dataInputs,
    dataType: 'json',
    success: function (response) {

      // ⚡ Save important stuff in localStorage for after redirect
      localStorage.setItem('percentageUpdate', response.data.percentage);
      localStorage.setItem('personName', response.data.names);
      localStorage.setItem('personEmail', response.data.email);
      localStorage.setItem('anonymousUser', response.data.anonymousUser);
      localStorage.setItem('hiddenID', $('#hiddenID').val());

      const clientSecret = response.clientSecret;

      const appearance = {
        theme: 'stripe',
        layout: { type: 'tabs' }
      };

      const elements = stripe1.elements({
        clientSecret: clientSecret,
        appearance: appearance,
      });

      $('#submit').removeClass('d-none');
      $('#makeDonationBtn').addClass('d-none');
      $('#inputFieldsPart').addClass('d-none');

      const paymentElement = elements.create('payment', { layout: 'tabs' });
      paymentElement.mount('#payment-element');

      const form = document.getElementById('payment-form');

      form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const { error } = await stripe1.confirmPayment({
          elements, 
          confirmParams: {
            return_url: window.location.href
          },
          redirect: "if_required"
        });

        if (error) {
          console.log(error);
          alert('The payment has failed.');
        } else { 
          preloader.style.display = "flex";

          // Once the payment has been succesful:
          // Send another AJAX request to update the database with the paid user
            const paymentIntentId = clientSecret.split('_secret')[0];

                let dataList = {
                  paymentID1: paymentIntentId,
                  percentageUpdate: response.data.percentage,
                  personName: response.data.names,
                  personEmail: response.data.email,
                  anonymousUser: response.data.anonymousUser,
                  hiddenID: $('#hiddenID').val()
                };

                $.ajax({
                  url: '/update-amount',
                  type: 'POST',
                  dataType: 'json',
                  data: dataList,
                  success: function (responseInner) {
                      

                    document.getElementById('waitingMessage').style.display = "none";
                    document.getElementById('successMessage').style.display = "flex";

                      let reloadBtn = document.querySelector('.reloadBtn');
                      reloadBtn.addEventListener('click', function () {
                          window.location.reload();
                      });

                      let timeleft = 60;
                      let downloadTimer = setInterval(function () {
                          if (timeleft <= 0) {
                              clearInterval(downloadTimer);
                              window.location.href = window.location.origin + window.location.pathname;
                            } else {
                              document.getElementById("countdown").innerHTML =
                               "Page reload in " + timeleft + " seconds";
                          }
                          timeleft -= 1;
                      }, 1000);
                  }
              });

        }
      });
    },
    error: function (xhr, status, error) {
      console.error('AJAX error:', error);
    }
  });
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
              
              errorMsg.classList.remove('d-none'); // Show error message
          } else {
              errorMsg.classList.add('d-none'); // Clear error message if value is within range
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
