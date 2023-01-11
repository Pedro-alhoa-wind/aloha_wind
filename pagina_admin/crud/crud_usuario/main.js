$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
        "columnDefs":[{
        "targets":-1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"    
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
        id=null;

    });


    $("#formPersonas").submit(function(e){
        e.preventDefaul();
        id = $.trim($("#id").val());
        nombre = $.trim($("#nombre").val());
        apellido = $.trim($("#apellido").val());
        nacionalidad = $.trim($("#nacionalidad").val());
        telefono = $.trim($("#telefono").val());
        usuario = $.trim($("#usuario").val());
        password = $.trim($("#password").val());
        $.ajax({
            url: "pagina_admin/crud/crud_usuario/bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {nombre:nombre, apellido:apellido, nacionalidad:nacionalidad, telefono:telefono, usuario:usuario, password:password, id:id},
            success: function(data){
                id = data[0].id;
                nombre = data[0].nombre;
                apellido = data[0].apellido;
                nacionalidad = data[0].nacionalidad;
                telefono = data[0].telefono;
                usuario = data[0].usuario;
                password = data[0].password;
                tablaPersonas.row.add([id,nombre,apellido,nacionalidad,telefono,usuario,password]).draw();
            }

        
        })
        $("#modalCRUD").modal("hide");

    });
});