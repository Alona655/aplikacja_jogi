function send_form() {
    var form = $('#formSearch');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'http://hello.loc:8085/searchCatalogById',
        data: msg,
        success: function(data) {

            let viewDiv = document.querySelector('.contentCourse')
            while (viewDiv.firstChild) {
                viewDiv.removeChild(viewDiv.firstChild);
            }
            for (let i = 0; i < data.list.length; i++) {
                blockToList(data.list[i].url, data.list[i].preview_image, data.list[i].title, data.list[i].rating)
            }
        },
        error:  function(logError){

        }
    });
}

