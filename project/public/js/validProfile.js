function onFileSelected(event)
{
    let selectedFile = event.target.files[0];
    let reader = new FileReader();
    let alert  = document.querySelector(".alert");
    let inputImage  = document.querySelector("#UploadPhotoForm");

    let imgtag = document.getElementById("myimage");
    imgtag.title = selectedFile.name;

    reader.onload = function(event) {
        imgtag.src = event.target.result;
        inputImage.value = event.target.result;

    };
    if(selectedFile.type === 'image/png' || selectedFile.type === 'image/jpeg'){
        reader.readAsDataURL(selectedFile);
        if(alert != null){
            document.body.removeChild(alert);
        }
    }else {
        var modal = $modal({
            title: 'Informacja',
            content: "<strong>Nieprawidłowy format pliku.</strong> Wybierz format obrazu jpg lub png.",
        });
        modal.show();
        document.getElementById("UploadPhoto").value = "";
        document.getElementById("myimage").src = 'public/upload/image/no-photo.jpg'
    }
}
