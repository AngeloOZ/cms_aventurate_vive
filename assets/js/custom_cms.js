const urlHost = 'http://localhost/aventurateyvive/';

initUploadFile();





/* Funciones para la seccion admin galeria */
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
    uploadPhotosGallery();
    editPhotosGallery();
    deletePhotosGallery();
}
function uploadPhotosGallery() {
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
        let url = urlHost;
        const data = new FormData(formUploadFile);
        const headers = new Headers();
        headers.append("X-MODE-REQUEST", "AJAX");

        if (formUploadFile.input_id_photo.value === "") {
            url += "admin-galeria/agregar";
        } else {
            url += "admin-galeria/editar"
        }

        fetch(url, {
            method: "POST",
            credentials: "same-origin",
            body: data,
            headers
        }).then(response => response.json())
            .then((response) => {
                toastr.options.progressBar = true;
                if (response.status == 200) {
                    if (response.message == "inserted") {
                        toastr.success("La foto se guardo con exito en el sistema");
                    } else if (response.message == "updated") {
                        toastr.success("La foto fue editada con exito en el sistema");
                    }
                    listPhotosGallery();
                } else {
                    toastr.error(response.message)
                }
                formUploadFile.reset();
                closeModal.click();
                previewPhoto.parentElement.classList.remove('active_preview_photo');
            })
            .catch(console.error)

    })
}
function editPhotosGallery() {
    const formUploadFile = document.getElementById('form-file-photos');
    const photos = document.querySelectorAll('.btn_edit_photos');
    const previewPhoto = document.querySelector("#preview_photo");
    photos.forEach(photo => {
        photo.addEventListener('click', e => {
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
function deletePhotosGallery() {
    const containerGallery = document.querySelector("#contenedor_galeria")
    containerGallery.addEventListener('click', async e =>{
        if(e.target.classList.contains('fa-times')){
            const btnDelete = e.target.parentElement;
            if(btnDelete.classList.contains('btn_delete_photos')){
                const padre = btnDelete.parentElement.parentElement.parentElement;
                const idPhoto = padre.dataset.idPhoto;
                const result = confirm("Está seguro de eliminar esta foto");
                toastr.options.preventDuplicates = true;
                toastr.options.progressBar = true;
                if(result){
                    const url = `${urlHost}admin-galeria/eliminar/${idPhoto}`;
                    fetch(url,{method: 'GET', headers:{"X-MODE-REQUEST": "AJAX"}})
                    .then(data => data.json())
                    .then(result =>{
                        if(result.status == 200 || result.status == 203){
                            toastr.success(result.message)
                            listPhotosGallery();
                        }else{
                            toastr.error(result.message)
                        }
                    })
                }else{
                    toastr.error('La operación se cancelo')
                    toastr.options.progressBar = true;
                }
            }
        }
    });
}
function listPhotosGallery() {
    const contenedor = document.querySelector("#contenedor_galeria")
    const url = `${urlHost}admingaleria/listar`;
    fetch(url, {
        method: "GET",
        headers: { "X-MODE-REQUEST": "AJAX" }
    }).then(response => response.json())
        .then(({ photos }) => {
            const fragment = document.createDocumentFragment();
            photos.forEach(photo => {
                const div = appendListGallery(photo);
                fragment.appendChild(div);
            });
            contenedor.innerHTML = '';
            contenedor.appendChild(fragment);
        })
}
function appendListGallery(photo) {
    const div = document.createElement('DIV');
    div.classList.add('col-md-55');
    div.innerHTML =
        `<div class="thumbnail">
        <div class="image view view-first" data-id-photo="${photo.id_photo}">
            <img loading="lazy" style="width: 100%; display: block;" src="${photo.url_photo}" alt="${photo.caption_photo}" />
            <div class="mask">
                <p>${photo.caption_photo}</p>
                <div class="tools tools-bottom">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></a>
                    <a class="btn_delete_photos" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="caption">
            <p>${photo.caption_photo}</p>
        </div>
        </div>`;
    return div;
}
