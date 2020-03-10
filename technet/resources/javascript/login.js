$(document).on('submit','#loginlg' , function(event) {
    event.preventDefault();

        JQuery.ajax({
            url: 'Login.Blade.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function () {
            }
        })
        .done(function (respuesta) {
            console.log(respuesta);
    })
            .fail(function (resp) {
                console.log(resp.responseText);
            })
            .always(function()  {
                console.log("complete");
                });

    });

