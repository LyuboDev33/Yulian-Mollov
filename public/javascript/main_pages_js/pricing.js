document.addEventListener("DOMContentLoaded", function () {

    showPricingContainers ();
    setPackageForUsers(firstPackage, 'rangeInputSingle', 'rangeNumbSingle', 'checkoutSingleUser');
    setPackageForUsers(secondPackage, 'rangeInputTwo', 'rangeNumbTwo', 'checkoutTwoUsers');
    setPackageForUsers(thirdPackage, 'rangeInputThree', 'rangeNumbThree', 'checkoutThreeUsers');
    setPackageForUsers(fourthPackage, 'rangeInputFour', 'rangeNumbFour', 'checkoutFourUsers');
});


function showPricingContainers () { 

    let pricingContainer = document.querySelector('.container__price');
    let btns = document.querySelectorAll('.btns');
    let pricingBoxes = document.querySelectorAll('.all__pricing__containers');

    btns.forEach(btn => { 
        btn.addEventListener('click', function () { 

            pricingContainer.style.display = "flex";

            let btnAttribute = btn.getAttribute('data-container');
            
            pricingBoxes.forEach(box => { 

                let boxAtrribute = box.getAttribute('data-container');  

                if(btnAttribute == boxAtrribute) { 
                    box.style.display = "flex";
                } else  { 
                    box.style.display = "none";

                }
             })
        })
    })

}


// Package arrays (leave them outside of the function)
let firstPackage = [
    {
        id: 1,
        stripe_id: 'price_1Q9Qcw2LffnEsv35Pt95EExI',
        product_price: '19.90лв / месец', 
        discount: "Няма"
    },
    {
        id: 2,
        stripe_id: 'price_1Q9Qhe2LffnEsv358rI2GmzD',
        product_price: '35.90лв (17.95лв/месец)', 
        discount: '10%'
    },
    {
        id: 3,
        stripe_id: 'price_1Q9Qhe2LffnEsv35eV2AF90i',
        product_price: '45.90лв (15.30лв/месец)',
        discount: '20%'
    },
    {
        id: 4,
        stripe_id: 'price_1Q9Qhe2LffnEsv35zwJORKo7',
        product_price: '55.90лв (13.97лв/месец)',
        discount: "30%"
    },
    {
        id: 5,
        stripe_id: 'price_1Q9Qhe2LffnEsv35NsUgcOck',
        product_price: '65.90лв (13.18лв/месец)',
        discount: "40%"
    },
    {
        id: 6,
        stripe_id: 'price_1Q9Qhe2LffnEsv35799AGS0B',
        product_price: '59.90лв (9.95лв/месец)',
        discount: "50%"
    }
];

let secondPackage = [
    {
        id: 1,
        stripe_id: 'price_1Q9R7C2LffnEsv35A6nIGaki',
        product_price: '31.90лв (15.95лв/месец на човек)', 
        discount: "Няма"
    },
    {
        id: 2,
        stripe_id: 'price_1Q9Rfr2LffnEsv354Ce8Y26y',
        product_price: '50.90лв (12.72лв/месец на човек)', 
        discount: '10%'
    },
    {
        id: 3,
        stripe_id: 'price_1Q9Rfr2LffnEsv35GIabB9yu',
        product_price: '69.90лв (11.65лв/месец на човек)',
        discount: '20%'
    },
    {
        id: 4,
        stripe_id: 'price_1Q9Rfr2LffnEsv359vzxbROu',
        product_price: '88.90лв (11.11/месец на човек)',
        discount: "30%"
    },
    {
        id: 5,
        stripe_id: 'price_1Q9Rfr2LffnEsv35OoECiU0x',
        product_price: '108.90лв (10.89лв/месец на човек)',
        discount: "40%"
    },
    {
        id: 6,
        stripe_id: 'price_1Q9Rfr2LffnEsv355IIBnGc5',
        product_price: '116.90лв (9.58лв/месец на човек)',
        discount: "50%"
    }
];

let thirdPackage = [
    {
        id: 1,
        stripe_id: 'price_1Q9lb02LffnEsv35tCZ7yIMd',
        product_price: '44.90лв (14.96лв/месец на човек)', 
        discount: "Няма"
    },
    {
        id: 2,
        stripe_id: 'price_1Q9liC2LffnEsv357eBXhOni',
        product_price: '71.90лв (11.98лв/месец на човек)', 
        discount: '10%'
    },
    {
        id: 3,
        stripe_id: 'price_1Q9liC2LffnEsv35ExuNjGmf',
        product_price: '99.90лв (11.10лв/месец на човек)',
        discount: '20%'
    },
    {
        id: 4,
        stripe_id: 'price_1Q9liC2LffnEsv35pmPxQNl9',
        product_price: '126.90лв (10.57/месец на човек)',
        discount: "30%"
    },
    {
        id: 5,
        stripe_id: 'price_1Q9liC2LffnEsv35sJCgDPw4',
        product_price: '154.90лв (10.32лв/месец на човек)',
        discount: "40%"
    },
    {
        id: 6,
        stripe_id: 'price_1Q9liC2LffnEsv35yKI19qr5',
        product_price: '171.90лв (9.16лв/месец на човек)',
        discount: "50%"
    }
];

let fourthPackage = [
    {
        id: 1,
        stripe_id: 'price_1Q9m5n2LffnEsv35RQxG4oKx',
        product_price: '55.90лв (13.97лв/месец на човек)', 
        discount: "Няма"
    },
    {
        id: 2,
        stripe_id: 'price_1Q9mAu2LffnEsv35id7Aby4C',
        product_price: '91.90лв (11.48лв/месец на човек)', 
        discount: '10%'
    },
    {
        id: 3,
        stripe_id: 'price_1Q9mAu2LffnEsv35ZNxq9XFH',
        product_price: '126.90лв (10.57лв/месец на човек)',
        discount: '20%'
    },
    {
        id: 4,
        stripe_id: 'price_1Q9mAu2LffnEsv35Zelc7MPr',
        product_price: '162.90лв (10.18/месец на човек)',
        discount: "30%"
    },
    {
        id: 5,
        stripe_id: 'price_1Q9mAu2LffnEsv35qALcrHQp',
        product_price: '198.90лв (9.94лв/месец на човек)',
        discount: "40%"
    },
    {
        id: 6,
        stripe_id: 'price_1Q9mAu2LffnEsv35HJSuWnTe',
        product_price: '225.90лв (8.95лв/месец на човек)',
        discount: "50%"
    }
];

function setPackageForUsers(packageArray, rangeInputId, finalSumId, checkoutButtonId) {

    let rangeInput = document.getElementById(rangeInputId);
    let finalSum = document.getElementById(finalSumId);
    let checkoutButton = document.getElementById(checkoutButtonId);
        

    rangeInput.addEventListener('input', (e) => {

        finalSum.innerHTML = e.target.value;
        let inputID = Number(e.target.value);
        
        let result = packageArray.filter(function (prod) { 
            return prod.id === inputID;
        });

        let finPrice = result[0].product_price;
        let stripeID = result[0].stripe_id; 

        checkoutButton.href = `/checkout/${stripeID}`;
        checkoutButton.innerHTML = finPrice;

    });
}

