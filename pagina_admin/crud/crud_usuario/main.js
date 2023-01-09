$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        "columnDefs":[{
        "targets":-1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-bg-danger btnBorrar'>Borrar</div></div>"    
        }],

        // Ponerlo en español

        "language":{
            "lengthMenu": "Mostrar _MENU_ registros",
            

        }
    });

});