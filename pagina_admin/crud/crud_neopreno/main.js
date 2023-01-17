$(document).ready(function(){
    tablaNeopreno = $("#tablaNeopreno").DataTable({
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
    $("#formNeopreno").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Neopreno");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    marca = fila.find('td:eq(1)').text();
    modelo = fila.find('td:eq(2)').text();
    talla = fila.find('td:eq(3)').text();
    grosor = fila.find('td:eq(4)').text();
    
    $("#marca").val(marca);
    $("#modelo").val(modelo);
    $("#talla").val(talla);
    $("#grosor").val(grosor);

    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Neopreno");            
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
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaNeopreno.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formNeopreno").submit(function(e){
    e.preventDefault();    
    marca = $.trim($("#marca").val());
    modelo = $.trim($("#modelo").val());
    talla = $.trim($("#talla").val());
    grosor = $.trim($("#grosor").val());    
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {marca:marca, modelo:modelo, talla:talla, grosor:grosor, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            marca = data[0].marca;
            modelo = data[0].modelo;
            talla = data[0].talla;
            grosor = data[0].grosor;
            if(opcion == 1){tablaNeopreno.row.add([id,marca,modelo,talla,grosor]).draw();}
            else{tablaNeopreno.row(fila).data([id,marca,modelo,talla,grosor]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});