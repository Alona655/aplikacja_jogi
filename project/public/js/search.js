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

function blockToList(url, preview_image, title, rating)
{
    let viewDiv = document.querySelector('.contentCourse')

    viewDiv.innerHTML += `<div class="video1">
                        <iframe class="farme" width="476" height="267.75" src="${url}"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}
                                html,body{height:100%}
                                img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}
                                span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}
                                </style>
                                 <a href='${url}'>
                                <img src='${preview_image}' alt='Demo video'>
                                <span>▶</span>
                                </a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                title="Demo video">
                        </iframe>
                        <p class="titleVide1">${title}</p>
                        <p class="rating">  ${ratingCourse(rating)}  
                        </p>
                    </div>`;

}
function ratingCourse (rating)
{
    let viewDiv = '';
    Array.from({length: rating}).forEach(i => {
        viewDiv += `<span class="fa fa-star"></span>`
    })
    return viewDiv;
}
function searchList (id, name, checked)
{
    let viewDiv = document.querySelector('#formSearch')
    viewDiv.innerHTML += `
            <div class="radiobtn">
                <input type="radio" id="${name}"
                       name="categories" value="${id}"
                        ${ checked == 1 ? 'checked' : '' }
                            onclick="send_form()"
                         />
                <label for="${name}">${name}</label>
            </div>
    `;

}