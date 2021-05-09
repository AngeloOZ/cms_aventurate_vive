initUploadFile();

function initUploadFile() {
    const formUploadFile = document.getElementById('form-file-photos');
    if (!formUploadFile) {
        return;
    }
    const radioUpFile = formUploadFile.typeUpload;
    radioUpFile.forEach(radio => {
        radio.addEventListener('change', e => {
            if (radioUpFile[0].checked) {
                formUploadFile.input_file_photo.type = "file";
            } else if (radioUpFile[1].checked) {
                formUploadFile.input_file_photo.type = "url";
                formUploadFile.input_file_photo.placeholder = "https://www.dominio.com/imagen.jpg";
            }
        });
    });
    uploadFilesGallery();
    editFilesGallery();
}
/* Funciones para la seccion galeria */
function uploadFilesGallery() {
    const formUploadFile = document.getElementById('form-file-photos');
    const fileInput = formUploadFile.input_file_photo;
    const closeModal = document.querySelector('.close_modal');
    const previewPhoto = document.getElementById('preview_photo_img');

    fileInput.addEventListener('change', (e) => {
        if (fileInput.type == "file") {
            const reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);

            reader.addEventListener('load', (e) => {
                previewPhoto.src = reader.result;
                previewPhoto.parentElement.classList.add('active_preview_photo');
            })
        } else if (fileInput.type == "url") {
            previewPhoto.src = fileInput.value;
            previewPhoto.parentElement.classList.add('active_preview_photo');
        }
    })

    formUploadFile.addEventListener('submit', e => {
        e.preventDefault();
        let url = formUploadFile.dataset.actionUrl;
        const data = new FormData(formUploadFile);
        const headers = new Headers();
        headers.append("X-MODE-REQUEST", "AJAX");

        if(formUploadFile.input_id_photo.value === ""){
            url += "admingaleria/agregar";
        }else{
            url += "admingaleria/editar"
        }

        fetch(url, {
            method: "POST",
            credentials: "same-origin",
            body: data,
            headers
        }).then(response => response.json())
        .then((response) => {
            if(response.status == 200){
                if(response.message == "inserted"){
                    const {photo} = response;
                    appendGalleryContent(photo);
                    toastr.success("La foto se guardo con exito en el sistema");
                }else if(response.message == "updated"){
                    window.location.reload();
                }
            }else{
                toastr.error(response.message)
            }
            formUploadFile.reset();
            closeModal.click();
            previewPhoto.parentElement.classList.remove('active_preview_photo');
        })
        .catch(console.error)

    })
}
function appendGalleryContent(photo) {
    const containerGallery = document.querySelector("#contenedor_galeria")
    const div = document.createElement('DIV');
    div.classList.add('col-md-55');
    div.innerHTML =
        `<div class="thumbnail">
        <div class="image view view-first" data-id-photo="${photo.id}">
            <img loading="lazy" style="width: 100%; display: block;" src="${photo.url}" alt="${photo.caption}" />
            <div class="mask">
                <p>${photo.caption}</p>
                <div class="tools tools-bottom">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></a>
                </div>
            </div>
        </div>
        <div class="caption">
            <p>${photo.caption}</p>
        </div>
        </div>`;
    containerGallery.appendChild(div);
}
function editFilesGallery(){
    const formUploadFile = document.getElementById('form-file-photos');
    const photos = document.querySelectorAll('.btn_edit_photos');
    const previewPhoto = document.querySelector("#preview_photo");
    photos.forEach(photo => {
        photo.addEventListener('click', e =>{
            const padre = photo.parentElement.parentElement.parentElement;
            const idPhoto = padre.dataset.idPhoto;
            const img = padre.querySelector('img').src;
            const caption = padre.querySelector('.mask p').textContent;
            formUploadFile.input_desc_photo.value = caption;
            formUploadFile.url.checked = true;
            formUploadFile.input_file_photo.type = "url";
            formUploadFile.input_file_photo.value = img;
            formUploadFile.input_id_photo.value = idPhoto;
            previewPhoto.firstElementChild.src = img;
            previewPhoto.classList.add('active_preview_photo');
        });
    });
}