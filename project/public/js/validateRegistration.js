function send_form() {
    var form = $('#formUser');
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'http://hello.loc:8085/registrationUser',
        data: msg,
        success: function(data) {
            if(data.status !== 400){
                window.location.href = 'activity'
            }else {
                var modal = $modal({
                    title: 'Informacja',
                    content: '<strong style="color: red">'+data.messages+'</strong>',
                });
                modal.show();
            }
        },
        error:  function(logError){
            console.log(logError)
            var modal = $modal({
                title: 'Informacja',
                content: 'Wystąpił błąd, spróbuj ponownie później',
            });
            modal.show();
        }
    });

}
function validate_form ( )
{

    let valid = true;
    const today = new Date().toISOString().split('T')[0];

    if ( document.contact_form.name.value == "" ){
        valid = false;
    }
    if ( document.contact_form.surname.value == "" ){
        valid = false;
    }
    if(document.contact_form.birthday.value > today || document.contact_form.birthday.value == ""){
        valid = false;
    }
    if ( ( document.contact_form.sex[0].checked == false ) && ( document.contact_form.sex[1].checked == false ) ){
        valid = false;
    }
    if(document.contact_form.weight.value == ""){
        valid = false;
    }
    if(document.contact_form.growth.value == ""){
        valid = false;
    }
    if(document.contact_form.exercises.value == ""){
        valid = false;
    }
    if(document.contact_form.email.value == ""){
        valid = false;
    }
    if(document.contact_form.password.value == ""){
        valid = false;
    }
    if(valid === false){
        ModalError()
    }
    if(valid === true){
        send_form()
    }
    return valid
}
function ModalError()
{
    var modal = $modal({
        title: 'Informacja',
        content: '<strong style="color: red">Proszę wypełnić pola</strong> lub wprowadź prawidłowe dane.',
    });
    modal.show();
}
