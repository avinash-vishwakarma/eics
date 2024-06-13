const addServiceForm = document.getElementById("addServiceForm");
const thumbnailInput = document.getElementById("thumbnail");
const thumbnailPreview = document.getElementById("thumbnailPreview");
const inputLableText = document.getElementById("selected_file_name");
const addServiceBtn = document.getElementById("addServiceBtn");
const alertSpinner = document.getElementById("creatingSpinner");

thumbnailInput.addEventListener("change", function (e) {
    const file = e.target.files[0];
    if (file && file.type.startsWith("image/")) {
        inputLableText.innerText = `Selected File : ${file.name}`;
        thumbnailPreview.src = URL.createObjectURL(file);
        thumbnailPreview.style.display = "block";
    } else {
        inputLableText.innerText = `Upload Thumbnail`;
        thumbnailPreview.src = "#";
        thumbnailPreview.style.display = "none";
    }
});

addServiceForm.addEventListener("submit", (e) => {
    e.preventDefault();
    addServiceBtn.setAttribute("disabled", "true");
    alertSpinner.classList.remove("d-none");

    const addServiceFormData = new FormData(addServiceForm);
    const formAction = addServiceForm.getAttribute("action");

    fetch(formAction, {
        method: "post",
        body: addServiceFormData,
        headers: {
            Accept: "application/json", // Specify that we expect a JSON response
        },
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            if (data.redirect) {
                window.location.replace(data.redirect);
            }
        })
        .catch((error) => {
            console.log("sorry someting went wrong");
        });
});
