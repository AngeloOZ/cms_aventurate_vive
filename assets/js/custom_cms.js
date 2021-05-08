initUploadFile();
uploadFilesGallery();

function initUploadFile(){
    const formUploadFile = document.getElementById('form-file-photos');
    if(!formUploadFile){
        return;
    }
    const radioUpFile  = formUploadFile.typeUpload;
    radioUpFile.forEach(radio => {
        radio.addEventListener('change', e =>{
            if(radioUpFile[0].checked){
                formUploadFile.input_file_photo.type = "file";
            }else if(radioUpFile[1].checked){
                formUploadFile.input_file_photo.type = "url";
                formUploadFile.input_file_photo.placeholder = "https://www.dominio.com/imagen.jpg";
            }  
        });
    });
}

function uploadFilesGallery(){
    const formUploadFile = document.getElementById('form-file-photos');
    formUploadFile.addEventListener('submit',e =>{
        e.preventDefault();
        const url = formUploadFile.dataset.actionUrl + "admingaleria/agregar";
        const data = new FormData(formUploadFile);
        const headers = new Headers();
        headers.append("X-MODE-REQUEST","AJAX");
        fetch(url,{
            method: "POST",
            credentials: "same-origin",
            body: data,
            headers
        })
        .then(data => data.text())
        .then(text => console.log(text))
        
    })
}