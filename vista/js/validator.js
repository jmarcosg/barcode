//EJERCICIO 8 - TP1
$(document).ready(function() {
    $('#codificacion').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            tipo_codificacion: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione una opción, por favor.'
                    }
                }
            }
        },

    });
});

