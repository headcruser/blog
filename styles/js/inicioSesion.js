$(document).ready(function()
{

   $("#login").bootstrapValidator(
    {
       fields:
       {
            email:
            {
                message:"Escribe un nombre",
                validators:
                {
                    notEmpty:{},
                    emailAddress:
                    {
                        message:"Escribe un Email Valido"
                    },
                    stringLength:
                    {
                        min:6,
                        max:50,
                        message:"El Email debe contener entre 6 y 50 carácteres"
                    }
                }
            },
            pasword:
            {
                validators:
                {
                    notEmpty:
                    {
                     message:"Escribe una Clave"   
                    },
                    diferent:
                    {
                        field:"email",
                        message:"La clave no puede ser el Email"
                    }
                }
            }
       }
    });

   
   $("#login").submit(function(){
        
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            success: function(response)
            {

                if(response.estado=="true")
                {
                    $("body").overhang({
                    type: "success",
                    message: "Redirigiendo a Pagina Principal",
                    callback:function()
                    {
                        window.location.href="http://192.168.86.129/blog/admin";
                    }
                    });
                }else
                {
                    $("body").overhang({
                    type: "error",
                    message: "Usuario y/o Password incorrecto"
                });

                }
            },
            error:function()
            {
                 $("body").overhang({
                    type: "error",
                    message: "Los datos no se enviaron"
                });
            }
        });
        return false; 

    });   
});