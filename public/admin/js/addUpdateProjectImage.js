const updateThumbnailInput = document.querySelector("#updateThumbnailInput");
const mainImageInput = document.querySelector("#updateMainImageInput");
const cropImagePreview = document.getElementById("crop_preview");
const uploadImageForm = document.getElementById("uploadImageForm");
let cropper;

let $modal = $("#crop-modal");
let $messageModal = $("#alertModal");
let aspectRatio;
let type;
let width;
let height;

updateThumbnailInput.addEventListener("change", (e) => {
    $modal.modal("show");
    $("#crop_preview").attr("src", URL.createObjectURL(e.target.files[0]));
    aspectRatio = 50 / 59;
    width = 450;
    height = 531;
    type = "thumbnail";
});

mainImageInput.addEventListener("change", (e) => {
    $modal.modal("show");
    $("#crop_preview").attr("src", URL.createObjectURL(e.target.files[0]));
    aspectRatio = 2 / 1;
    type = "main";
    width = 600;
    height = 300;
});

$modal
    .on("shown.bs.modal", function () {
        cropper = new Cropper(cropImagePreview, {
            aspectRatio: aspectRatio,
            viewMode: 3,
            autoCropArea: 1,
            responsive: true,
            scalable: true,
        });
    })
    .on("hidden.bs.modal", function () {
        cropper.destroy();
        cropper = null;
        aspectRatio = null;
        width = null;
        height = null;
    });

$messageModal.on("hidden.bs.modal", function () {
    location.reload();
});

$("#cropBtn").on("click", () => {
    var canvas;
    $modal.modal("hide");

    if (cropper) {
        canvas = cropper.getCroppedCanvas({
            width: width,
            height: height,
        });
        console.log(type);

        canvas.toBlob((blob) => {
            var formData = new FormData(uploadImageForm);
            formData.append("image", blob);
            formData.append("type", type);

            $.ajax(uploadImageForm.getAttribute("action"), {
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $("#modal-text").text(response.success);
                    $messageModal.modal("show");
                },
                error: function (response) {
                    console.log("Upload error");
                },
            });
        });
    }
});

function uploadImage() {}
