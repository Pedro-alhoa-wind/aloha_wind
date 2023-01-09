$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        "columnDefs":[{
        "targets":-1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</div></div>"    
        }],

        // Ponerlo en español

        "language":{
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoFiltered": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar",
            "oPaginate":{
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });

    $("#btnNuevo").click(function(){
        $("#formPersonas").trigger("reset");
        $(".modal-header").css("background-color", "red");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nueva Persona");

        $("#modalCRUD").modal("show");

    });


    $("#formPersonas").submit(function(e){
        e.preventDefaul();
        id = $.trim($("#id").val());
        nombre = $.trim($("#nombre").val());
        apellido = $.trim($("#apellido").val());
        nacionalidad = $.trim($("#nacionalidad").val());
        telefono = $.trim($("#telefono").val());
        usuairo = $.trim($("#usuairo").val());
        password = $.trim($("#password").val());
        $.ajax({
            url: "pagina_admin/crud/crud_usuario/bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {nombre:nombre, apellido:apellido, nacionalidad:nacionalidad, telefono:telefono, usuairo:usuairo, password:password},
            success: function(data){
                var datos = JSON.parse(data);
                id = datos[0].id;
                nombre = datos[0].nombre;
                apellido = datos[0].apellido;
                nacionalidad = datos[0].nacionalidad;
                telefono = datos[0].telefono;
                usuairo = datos[0].usuairo;
                password = datos[0].password;
                tablaPersonas.row.add([id,nombre,apellido,nacionalidad,telefono,usuairo,password]).draw();
            }

        
        })
        $("#modalCRUD").modal("hide");
    });
});