document.addEventListener('DOMContentLoaded', function () {

    // pdfViewer();
    formConfirm ();
});

function pdfViewer () { 
    let file = document.getElementById('fileName').value;    
    let closePDF = document.getElementById('closePDF');
    let downloadFile = document.querySelector('.downloadFile');
    let pdf = document.querySelector('.pdf');
    let pdf_background = document.querySelector('.pdf_background')

    // Check if the file is a PDF
    if (file.toLowerCase().endsWith('.pdf')) {
        pdf.style.display = "flex";
    } else { 
        downloadFile.style.display = "flex";
    }

    pdf.addEventListener('click', function () {
    pdf_background.style.display = "flex";
        let adobeDCView = new AdobeDC.View({
            clientId: "50a41c61772a4c8aa70b76e21b6d2361",
            divId: "adobe-dc-view"
        });
        adobeDCView.previewFile({
            content: { location: { url: `https://yulianmollov.bg/assets_dashboard/files/${file}` } },
            metaData: { fileName: file }
        });
     });

     closePDF.addEventListener('click', function () { 
        pdf_background.style.display = "none";

     })




}

function formConfirm() {
    let form = document.getElementById('formCreateAccount');
    let statusValue = document.getElementById('statusValue');
    let backgroundModals = document.querySelectorAll('.backgroundConfirm');
    let successModal = document.querySelector('.msg-success');
    let failModal = document.querySelector('.msg-fail');
    let closeButtons = document.querySelectorAll('.closeModal');
    let triggerBtn = document.querySelectorAll('.triggerBtn')

    // Add event listener for form submission
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Hide all modals first
        backgroundModals.forEach(background => {
            background.style.display = "none";
        });

        // Show the correct modal based on the selected value
        if (statusValue.value === "approved") {
            successModal.parentElement.style.display = "flex"; // Show the success modal
        } else if (statusValue.value === "canceled") {
            failModal.parentElement.style.display = "flex"; // Show the fail modal
        }

        triggerBtn.forEach(button => { 
            button.addEventListener('click', function () { 
                form.submit();
            })
        })
    });

    // Add event listener for all close buttons
    closeButtons.forEach(closeButton => {
        closeButton.addEventListener('click', function () {
            backgroundModals.forEach(background => {
                background.style.display = "none"; // Hide all modals
            });
        });
    });
}
