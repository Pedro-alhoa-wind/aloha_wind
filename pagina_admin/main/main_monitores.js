$(document).ready(function(){
    tablaMonitor = $("#tablaMonitor").DataTable({
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
    $("#formMonitor").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Monitor");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    deporte = fila.find('td:eq(1)').text();
    dni = fila.find('td:eq(2)').text();
    nombre = fila.find('td:eq(3)').text();
    apellido = fila.find('td:eq(4)').text();
    telefono = parseInt(fila.find('td:eq(5)').text());
    email = fila.find('td:eq(6)').text();
    
    $("#deporte").val(deporte);
    $("#dni").val(dni);
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $("#telefono").val(telefono);
    $("#email").val(email);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Monitor");            
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
            url: "../crud_monitores/bd_monitores/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaMonitor.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formMonitor").submit(function(e){
    e.preventDefault();    
    deporte = $.trim($("#deporte").val());
    dni = $.trim($("#dni").val());
    nombre = $.trim($("#nombre").val());
    apellido = $.trim($("#apellido").val());
    telefono = $.trim($("#telefono").val());
    email = $.trim($("#email").val());    
    $.ajax({
        url: "../crud_monitores/bd_monitores/crud.php",
        type: "POST",
        dataType: "json",
        data: {deporte:deporte, dni:dni, nombre:nombre, apellido:apellido, telefono:telefono, email:email, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            deporte = data[0].deporte;
            dni = data[0].dni;            
            nombre = data[0].nombre;
            apellido = data[0].apellido;
            telefono = data[0].telefono;
            email = data[0].email;
            if(opcion == 1){tablaMonitor.row.add([id,deporte,dni,nombre,apellido,telefono,email]).draw();}
            else{tablaMonitor.row(fila).data([id,deporte,dni,nombre,apellido,telefono,email]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});