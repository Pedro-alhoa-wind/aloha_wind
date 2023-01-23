$('#formLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if(usuario.length == "" || password == ""){
        Swal.fire({
            type:'warning',
            title:'Introduce un usuario y/o password',
        });
        return false;
    }else{
        $.ajax({
            url: "login/bd/login.php",
            type: "POST",
            dataType: "json",
            data: {usuario:usuario, password:password},
            success: function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'Error',
                        title:'Incorrecto Usuario y/o password',
                    });
                }else{
                    Swal.fire({
                      type:'success',
                      title:'¡Conexión con exito!',  
                    }).then((result) => {
                        if(result.value){
                            window.location.href = "pagina_admin/index.php"; 
                        }
                    })
                }
            } 
            

        });
    }
});