$(document).ready(function(){
    tablaAlquilerMaterialSurf = $("#tablaAlquilerMaterialSurf").DataTable({
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
    $("#formAlquilerMaterialSurf").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva alquiler material surf");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    tablas = fila.find('td:eq(1)').text();
    neoprenos = fila.find('td:eq(2)').text();
    fecha = fila.find('td:eq(3)').text();
    hora = fila.find('td:eq(4)').text();
    
    
    $("#tablas").val(tablas);
    $("#neoprenos").val(neoprenos);
    $("#fecha").val(fecha);
    $("#hora").val(hora);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar alquiler material surf");            
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
            url: "/pagina_admin/bd/bd_alquiler_material_surf/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formAlquilerMaterialSurf").submit(function(e){
    e.preventDefault();    
    tablas = $.trim($("#tablas").val());
    neoprenos = $.trim($("#neoprenos").val());
    fecha = $.trim($("#fecha").val());
    hora = $.trim($("#hora").val());    
    $.ajax({
        url: "/pagina_admin/bd/bd_alquiler_material_surf/crud.php",
        type: "POST",
        dataType: "json",
        data: {tablas:tablas, neoprenos:neoprenos, fecha:fecha, hora:hora, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            tablas = data[0].tablas;
            neoprenos = data[0].neoprenos;
            fecha = data[0].fecha;
            hora = data[0].hora;
            if(opcion == 1){tablaAlquilerMaterialSurf.row.add([id,tablas,neoprenos,fecha,hora]).draw();}
            else{tablaAlquilerMaterialSurf.row(fila).data([id,tablas,neoprenos,fecha,hora]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});