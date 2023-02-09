$(document).ready(function(){
    tablaReservaClaseSurf = $("#tablaReservaClaseSurf").DataTable({
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
    $("#formClases").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Reserva Clase Surf");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    tipo = fila.find('td:eq(1)').text();
    
    $("#tipo").val(tipo);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Reserva Clase Surf");            
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
            url: "/pagina_admin/bd/bd_clases/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaReservaClaseSurf.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formClases").submit(function(e){
    e.preventDefault();    
    tipo = $.trim($("#tipo").val());    
    $.ajax({
        url: "/pagina_admin/bd/bd_clases/crud.php",
        type: "POST",
        dataType: "json",
        data: {tipo:tipo, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            tipo = data[0].tipo;
            if(opcion == 1){tablaReservaClaseSurf.row.add([id,tipo]).draw();}
            else{tablaReservaClaseSurf.row(fila).data([id,tipo]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});