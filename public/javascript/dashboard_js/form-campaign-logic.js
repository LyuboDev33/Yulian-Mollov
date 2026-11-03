document.addEventListener('DOMContentLoaded', function () {

        uploadSingleImage();
        uploadMultipleImages();
        removeImages ();
        validateForm ();
        previewVideo ();
});




function validateForm() {
    let form = document.getElementById('formCampaign');
    let inputAreas = document.querySelectorAll('.inputArea');
    let campaignDescription = document.getElementById('campaign_description');
    let editorInstance; // To hold CKEditor instance
    let preloader = document.getElementById('preloader');

    if (!form || !campaignDescription) {
        return;
    }

    // Initialize CKEditor 5
    ClassicEditor
        .create(campaignDescription, {
            toolbar: [
                'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'
            ]
        })
        .then(editor => {
            editorInstance = editor;

            // Listen for content changes in the CKEditor
            editor.model.document.on('change:data', () => {
                let errorField = campaignDescription.closest('.mb-3').querySelector('.errorFields');
                if (errorField) {
                    errorField.textContent = ""; // Clear error when content changes
                }
            });
        })
        .catch(error => {
            console.error('There was a problem initializing the editor.', error);
        });

    // Remove error dynamically for other input fields
    inputAreas.forEach(input => {
        input.addEventListener('input', function () {
            let parent = input.parentElement;
            let errorField = parent.querySelector('.errorFields');
            if (errorField) {
                errorField.textContent = ""; // Clear the error message
            }
        });
    });


    // Validate the form on submit
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        let isValid = true; // Flag to track validation status

        // Validate inputs
        inputAreas.forEach(input => {
            let value = input.value.trim();
            if (value === "") {
                let parent = input.parentElement;
                let errorField = parent.querySelector('.errorFields');
                if (errorField) {
                    errorField.textContent = "Това поле е задължително.";
                }
                isValid = false;
            }
        });

        // Validate CKEditor content
        if (editorInstance) {
            let editorContent = editorInstance.getData().trim();
            if (editorContent === "") {
                let errorField = campaignDescription.closest('.mb-3').querySelector('.errorFields');
                if (errorField) {
                    errorField.textContent = "Това поле е задължително.";
                }
                isValid = false;
            }
        }

        // Submit the form if everything is valid
        if (isValid) {
            form.submit();
            preloader.style.display = "flex";
        }
    });
}

// function enableCKEeditor () { 
//     let campaignDescription = document.getElementById('campaign_description');

//       if(!campaignDescription) { 
//         return;
//       }

//       ClassicEditor
// 		.create(document.querySelector('#campaign_description'), {
// 			toolbar: [
// 				'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' // Exclude 'imageUpload' or 'insertImage'
// 			]
// 		})
// 		.then(editor => {
// 			window.editor = editor;
// 		})
// 		.catch(error => {
// 			console.error('There was a problem initializing the editor.', error);
// 		});
//   }
function previewVideo () { 
    let namePreview = document.getElementById('videoPreview');
    let videoInput = document.getElementById('videoInput');
    let removeVideo = document.getElementById('removeVideo');

    if(videoInput) { 
        videoInput.addEventListener('change', function (event) { 
       
            let fileName =  event.target.files[0].name;
            namePreview.textContent = fileName;
        });
    }

    if(removeVideo) { 
        removeVideo.addEventListener('click', function () { 
            videoInput.value = "";
            namePreview.textContent = "";
        })
    }

}

function uploadSingleImage() {
    const input = document.getElementById('single-image');
    if(!input) { 
        return;
    }
    const previewPhoto = () => {
        const file = input.files[0]; // Access the first file directly

        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');

            fileReader.onload = function (event) {
                preview.innerHTML = `<img src="${event.target.result}" class="thumbnails">`;
            };
            fileReader.readAsDataURL(file);
        } 
    };
    input.addEventListener("change", previewPhoto);
}

function uploadMultipleImages() {

    let inputFiled = document.getElementById('file-upload');

    if(!inputFiled) { 
        return;
    }

    document.getElementById('file-upload').addEventListener('change', (e) => {
        if(window.File && window.FileReader && window.FileList && window.Blob) { 
            const output = document.getElementById('result');
            const files = e.target.files;

            for(let i = 0; i < files.length; i++) { 
                if(!files[i].type.match('image')) continue;
                const pickReader = new FileReader ();
                pickReader.addEventListener('load', function (event) { 
                    const picFile = event.target;
                    const div = document.createElement('div');
                    div.innerHTML = `<img class='thumbnails' src="${picFile.result}">`;
                    output.append(div);
                })
                pickReader.readAsDataURL(files[i]);
            }
        } else { 
            alert('Вашият браузър не позволява качването на файлове. Моля опитайте от друг браузър')
        }
    })  
}

function removeImages () { 
    let btnRemoveSingle = document.querySelector('.removeImg');
    let btnRemoveMultiple = document.querySelector('.removeGallery');
    let btnRemoveVideo = document.querySelector('#removeVideo');

    let previewSingle = document.getElementById('file-preview');
    let previewMultiple = document.getElementById('result');

    let inputSingle = document.getElementById('single-image');
    let multipleInput = document.getElementById('file-upload');

    if(btnRemoveVideo) {
            btnRemoveVideo.addEventListener('click', function () { 
            previewSingle.innerHTML = "";
            inputSingle.value = "";
        });
    }

    if(btnRemoveSingle) {
        btnRemoveSingle.addEventListener('click', function () { 
            previewSingle.innerHTML = "";
            inputSingle.value = "";
        });
    }
    
    if(btnRemoveMultiple) {
        btnRemoveMultiple.addEventListener('click', function () { 
            previewMultiple.innerHTML = "";
            multipleInput.value = "";
        });
    }

    
}