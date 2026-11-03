document.addEventListener("DOMContentLoaded", () => {
    const payoutForm = document.querySelector("#payoutForm");
    const modal = document.querySelector(".payoutCause");
    const confirmButton = modal.querySelector("button[type='submit']");
    const payoutBtn = document.querySelector('.payoutBtn');
    const elementPayouts = document.querySelector('#payoutElement')
    
    payoutBtn.addEventListener('click', function () { 
        elementPayouts.scrollIntoView();
    })

    let isValid = false; // Define at the top

    payoutForm.closest("form").addEventListener("submit", (e) => {
        e.preventDefault(); // Prevent form submission
        isValid = true; // Reset the validity before validation

        // Get all inputs within payoutBlock
        const inputs = payoutForm.querySelectorAll(".payoutBlock input");

        // Loop through each input and validate
        inputs.forEach((input) => {
            const parent = input.parentElement;
            const errorMsg = parent.querySelector(".errorMsg");

            if (input.type === "file") {
                const parentFile = input.parentElement.parentElement;
                const errorFile = parentFile.querySelector(".errorMsgFile");

                if (!input.files || input.files.length === 0) {
                    errorFile.textContent = "Това поле е задължително";
                    isValid = false;
                } else {
                    errorFile.textContent = ""; // Clear the error message if valid
                }
            } else {
                if (input.value.trim() === "") {
                    errorMsg.textContent = "Това поле е задължително";
                    isValid = false;
                } else if (input.type === "number" && parseFloat(input.value) < 1) {
                    errorMsg.textContent = "Сумата не може да бъде отрицателна";
                    isValid = false;
                } else {
                    errorMsg.textContent = ""; // Clear the error message if valid
                }
            }
        });

        // If inputs are valid, perform amount validation
        if (isValid) {
            const platformChoice = payoutForm.querySelector('#selectValue').value;
            const inputValue = document.getElementById('payoutAmount');
            const errorMsg = document.querySelector('.errorMsg');

            let amountIsValid = true; // Check if the amount is valid for the selected platform

            switch (platformChoice) {
                case 'Dr. Yulian Mollov':
                    const amoutCauses = Number(document.querySelector('.causeDonations').textContent);

                    if (inputValue.value > amoutCauses) {
                        errorMsg.textContent = `Въведената сума е по-голяма от наличната в акаунта ${platformChoice}`;
                        amountIsValid = false;
                    }
                    break;

                case 'Dr. Mollov Platform': 
                    const amountSubs = Number(document.querySelector('.subsAmount').textContent);

                    if (inputValue.value > amountSubs) {
                        errorMsg.textContent = `Въведената сума е по-голяма от наличната в акаунта на ${platformChoice}`;
                        amountIsValid = false;
                    }
                    break;

                // case 'PlatformMoney': 
                //     const amountPercentage = Number(document.querySelector('.causePercentage').textContent);

                //     if (inputValue.value > amountPercentage) {
                //         errorMsg.textContent = `Въведената сума е по-голяма от наличната в акаунта ${platformChoice}`;
                //         amountIsValid = false;
                //     }
                //     break;

                default:
                    break;
            }

            if (amountIsValid) {
                // If the amount is valid, show the modal
                modal.style.display = "flex";

                confirmButton.addEventListener("click", (event) => {
                    event.preventDefault();

                    // Allow form submission after user confirms in the modal
                    payoutForm.closest("form").submit();
                });
            }
        }
    });

    // Event listener for clearing error messages dynamically
    const inputs = payoutForm.querySelectorAll(".payoutBlock input");
    inputs.forEach((input) => {
        input.addEventListener("input", () => {
            const parent = input.parentElement;
            const errorMsg = parent.querySelector(".errorMsg");

            if (input.type === "file") {
                const parentFile = input.parentElement.parentElement;
                const errorFile = parentFile.querySelector(".errorMsgFile");
                errorFile.textContent = "";
            } else {
                errorMsg.textContent = "";
            }
        });

        if (input.type === "file") {
            input.addEventListener("change", () => {
                const parentFile = input.parentElement.parentElement;
                const errorFile = parentFile.querySelector(".errorMsgFile");
                const fileNaming = parentFile.querySelector(".fileNaming");

                // Clear the error message when a file is uploaded
                errorFile.textContent = "";

                // Display the uploaded file name
                if (input.files && input.files.length > 0) {
                    fileNaming.textContent = input.files[0].name;
                } else {
                    fileNaming.textContent = ""; // Clear file name if no file is selected
                }
            });
        }
    });
});
