$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets":-1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        },

        //botones de pdf, excel e imprimir
        responsive: "true",
        dom: 'Bfrtilp',
        buttons:[

                {
                    extend:     'excelHtml5',
                    text:       '<i class="fas fa-file-excel"></i>',
                    titleAttr:  'Exportar a Excel',
                    className:  'btn btn-success'
                },
                {

                    extend:     'pdfHtml5',
                    text:       '<i class="fas fa-file-pdf"></i>',
                    titleAttr:  'Exportar a PDF',
                    className:  'btn btn-danger'
                },

                {

                    extend:     'print',
                    text:       '<i class="fa fa-print"></i>',
                    titleAttr:  'Imprimir',
                    className:  'btn btn-info'

                },

        ]
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    apellido = fila.find('td:eq(2)').text();
    nacionalidad = fila.find('td:eq(3)').text();
    telefono = parseInt(fila.find('td:eq(4)').text());
    usuario = fila.find('td:eq(5)').text();
    password = fila.find('td:eq(6)').text();
    
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $("#nacionalidad").val(nacionalidad);
    $("#telefono").val(telefono);
    $("#usuario").val(usuario);
    $("#password").val(password);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR



$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de quieres eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "../crud_usuario/bd_usuario/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    apellido = $.trim($("#apellido").val());
    nacionalidad = $.trim($("#nacionalidad").val());
    telefono = $.trim($("#telefono").val());
    usuario = $.trim($("#usuario").val());
    password = $.trim($("#password").val());    
    $.ajax({
        url: "../crud_usuario/bd_usuario/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, apellido:apellido, nacionalidad:nacionalidad, telefono:telefono, usuario:usuario, password:password, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            nombre = data[0].nombre;
            apellido = data[0].apellido;
            nacionalidad = data[0].nacionalidad;
            telefono = data[0].telefono;
            usuario = data[0].usuario;
            password = data[0].password;
            if(opcion == 1){tablaPersonas.row.add([id,nombre,apellido,nacionalidad,telefono,usuario,password]).draw();}
            else{tablaPersonas.row(fila).data([id,nombre,apellido,nacionalidad,telefono,usuario,password]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});