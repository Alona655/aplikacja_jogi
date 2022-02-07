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

function onload() {
    jQuery.extend({
        getResult: function () {
            var result = null;
            $.ajax({
                url: 'http://hello.loc:8085/searchInfo',
                type: 'post',
                dataType: 'json',
                async: false,
                success: function (data) {
                    result = data;
                }
            });
            return result;

        }
    });
    window.result = $.getResult();
    document.addEventListener("DOMContentLoaded", function (event) {
        for (let i = 0; i < result.list.length; i++) {
            blockToList(result.list[i].url, result.list[i].preview_image, result.list[i].title, result.list[i].rating)

        }
        for (let i = 0; i < result.categories.length; i++) {
            searchList(result.categories[i].id, result.categories[i].name, result.categories[i].checked)
        }
    });
}
