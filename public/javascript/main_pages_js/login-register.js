document.addEventListener('DOMContentLoaded', function () { 

  showFileName ();
  showEyePassword ();
  validateForm ();
  
})

function validateForm() {
  let fileInput = document.getElementById('fileInput');
  let error = document.querySelector('.fileError');
  let form = document.getElementById('formCampaign');

  // Check if the required elements exist before proceeding
  if (!fileInput || !error || !form) return;

  form.addEventListener('submit', function (event) {
      event.preventDefault();

      if (fileInput.value === "") {
          error.textContent = "Прикачането на файл е задължително";
      } else {
          form.submit();
      }
  });
}

function showFileName() {
  let fileInput = document.getElementById('fileInput');
  let fileNameDisplay = document.getElementById('fileNameDisplay');
  let error = document.querySelector('.fileError');

  // Check if the required elements exist before proceeding
  if (!fileInput || !fileNameDisplay || !error) return;

  fileInput.addEventListener('change', function () {
      const files = this.files;

      if (files && files[0]) {
          fileNameDisplay.textContent = files[0].name;
          error.textContent = "";
      }
  });
}

function showEyePassword() {
  const forms = document.querySelector(".forms");
  const pwShowHide = document.querySelectorAll(".eye-icon");
  const links = document.querySelectorAll(".link");

  // Check if the required elements exist before proceeding
  if (!forms || pwShowHide.length === 0) return;

  pwShowHide.forEach(eyeIcon => {
      eyeIcon.addEventListener("click", () => {
          let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

          pwFields.forEach(password => {
              if (password.type === "password") {
                  password.type = "text";
                  eyeIcon.classList.replace("bx-hide", "bx-show");
                  return;
              }
              password.type = "password";
              eyeIcon.classList.replace("bx-show", "bx-hide");
          });
      });
  });
}