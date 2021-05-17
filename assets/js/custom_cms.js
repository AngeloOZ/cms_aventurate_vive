const urlHost = 'http://localhost/aventurateyvive/';

initUploadFile();
initTours();
initAddDay();




/* Funciones para la seccion admin paquetes */
function initTours() {
    const tableTours = document.getElementById('tabla-tours');
    if (!tableTours) return;

    triggerButtonsActions();
    generateInputsFormTour();
}

function triggerButtonsActions() {
    const tableTours = document.getElementById('tabla-tours');
    tableTours.addEventListener('click', e => {
        if (e.target.classList.contains('btn-danger')) {
            const id = parseInt(e.target.parentElement.dataset.idTours);
            swal({
                icon: "info",
                title: "¿Estas seguro de eliminar el tour?",
                text: "¡No podrás revertir esto!",
                buttons: {
                    cancel: {
                        text: "Cancelar",
                        value: false,
                        visible: true,
                        className: "",
                        closeModal: true,
                      },
                    confirm: true,
                }
            }).then(confirm => {
                if(confirm) deleteTour(id);
            });
        } else if (e.target.classList.contains('btn-warning')) {
            const id = parseInt(e.target.parentElement.dataset.idTours);
            editTour(id);
        }
    })
}
function editTour(id) {
    console.log(id);
}
function deleteTour(id) {
    swal({
        icon: "success",
        title: "¡Eliminado!",
        text: `El tour ${id} ha sido borrado`,
        timer: "2000",
        buttons: {
            confirm: true,
        }
    })
    console.log(id);
}
function generateInputsFormTour() {
    const ctnAttractive = document.getElementById('contenedor-atractivos');
    const inputNumer = document.getElementById('input-number-tours');

    inputNumer.addEventListener('change', e => {
        ctnAttractive.innerHTML = '';
        const limit = parseInt(inputNumer.value);
        const fragment = document.createDocumentFragment();
        for (let i = 1; i <= limit; i++) {
            const div = document.createElement('DIV');
            div.classList.add('row');
            div.style.margin = "10px";
            div.innerHTML = `<label for="" class="col-md-6">Atractivos del lugar ${i}</label><input type="number" name="place_attractive[]" class="col-md-6" min="1" max="10" value="1" required>`
            fragment.appendChild(div);
        }
        ctnAttractive.appendChild(fragment);
    })
}

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
    containerGallery.addEventListener('click', async e => {
        if (e.target.classList.contains('fa-times')) {
            const btnDelete = e.target.parentElement;
            if (btnDelete.classList.contains('btn_delete_photos')) {
                const padre = btnDelete.parentElement.parentElement.parentElement;
                const idPhoto = padre.dataset.idPhoto;
                const result = confirm("Está seguro de eliminar esta foto");
                toastr.options.preventDuplicates = true;
                toastr.options.progressBar = true;
                if (result) {
                    const url = `${urlHost}admin-galeria/eliminar/${idPhoto}`;
                    fetch(url, { method: 'GET', headers: { "X-MODE-REQUEST": "AJAX" } })
                        .then(data => data.json())
                        .then(result => {
                            if (result.status == 200 || result.status == 203) {
                                toastr.success(result.message)
                                listPhotosGallery();
                            } else {
                                toastr.error(result.message)
                            }
                        })
                } else {
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

/* Funciones para añadir el horarios */
function initAddDay() {
    const btnAddDay = document.getElementById('btn_add_day_tour');
    const btnClearDays = document.getElementById('btn_days_clear');
    const ctnDaysTour = document.getElementById('contenedor_days_tour');
    let diys = 1;
    if (!btnAddDay || !ctnDaysTour) return;

    creatElementDay(ctnDaysTour);
    btnAddDay.addEventListener('click', _ => {
        creatElementDay(ctnDaysTour);
    })
    btnClearDays.addEventListener('click', ()=>{
        swal({
            icon: "error",
            title: "¿Estas seguro de limpiar el itinerario?",
            text: "¡No podrás revertir esto!",
            buttons: {
                cancel: {
                    text: "Cancelar",
                    value: false,
                    visible: true,
                    className: "",
                    closeModal: true,
                  },
                confirm: true,
            }
        }).then(confirm => {
            if(confirm) ctnDaysTour.remove();
        });
    });
    ctnDaysTour.addEventListener('click', e =>{
        if(e.target.classList.contains('btn_add_hour_tour')){
            const ctnHourDay = e.target.previousElementSibling.previousElementSibling;
            createElementHour(ctnHourDay);
        }else if(e.target.parentElement.classList.contains('btn_delete_hora')){
            e.target.parentElement.parentElement.remove();
        }   
    })

}
function creatElementDay(contenedor) {
    const numDay = contenedor.childElementCount + 1;
    const div = document.createElement('DIV');
    div.classList.add('col-md-12','col-sm-12','col-xs-12');
    div.innerHTML = `<div class="x_panel">
    <div class="x_title">
       <h2>Dia ${numDay}</h2>
       <ul class="nav navbar-right panel_toolbox">
            <li class="dropdown invisible">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
       <div class="clearfix"></div>
    </div>
    <div class="x_content">
       <div id="contenedor_horas" day-num="${numDay}">
          <div class="row ctn_day">
             <a class="close-link btn_delete_hora"><i class="fa fa-close"></i></a>
             <div class="col-xs-6 col-md-2 form-group">
                <label for="">Inicio</label>
                <input type="time" name="days[${numDay}][itinerario][1][start_hour]" class="form-control" value="15:12" required>
             </div>
             <div class="col-xs-6 col-md-2 form-group">
                <label for="">Fin</label>
                <input type="time" name="days[${numDay}][itinerario][1][end_hour]" class="form-control" value="16:12" required>
             </div>
             <div class="col-xs-12 col-md-8 form-group">
                <label for="">Descripción</label>
                <textarea name="days[${numDay}][itinerario][1][caption]" cols="30" rows="2" class="form-control" required>Un lugar botnio por ahi</textarea>
             </div>
          </div>
       </div>
       <div class="ln_solid"></div>
       <a class="btn btn-primary btn_add_hour_tour">Añadir otra hora</a>
       <br><br>
    </div>
 </div>`;
 contenedor.appendChild(div);
}
function createElementHour(contenedor){
    const numDay = parseInt(contenedor.getAttribute('day-num'));
    const numhours = contenedor.childElementCount + 1;

    const div = document.createElement('DIV');
    div.classList.add('row','ctn_day');
    div.innerHTML = `<a class="close-link btn_delete_hora"><i class="fa fa-close"></i></a>
    <div class="col-xs-6 col-md-2 form-group">
       <label for="">Inicio</label>
       <input type="time" name="days[${numDay}][itinerario][${numhours}][start_hour]" class="form-control" value="16:12" required>
    </div>
    <div class="col-xs-6 col-md-2 form-group">
       <label for="">Fin</label>
       <input type="time" name="days[${numDay}][itinerario][${numhours}][end_hour]" class="form-control" value="17:12" required>
    </div>
    <div class="col-xs-12 col-md-8 form-group">
       <label for="">Descripción</label>
       <textarea name="days[${numDay}][itinerario][${numhours}][caption]" cols="30" rows="2" class="form-control" required>Un lugar botnio por ahi</textarea>
    </div>`
    contenedor.appendChild(div);
}