$(document).ready(function()
{
    $("#usuarioNuevo").bootstrapValidator(
    {
       fields:
       {
            nombre:
            {
                message:"Escribe un nombre",
                validators:
                {
                    notEmpty:{},
                    stringLength:
                    {
                        min:6,
                        max:30,
                        message:"El nombre debe contener entre 6 y 30 carácteres"
                    }
                }
            },
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
                    stringLength:
                    {
                        min:8,
                        message:"Debe contener minimo 8 caracteres"
                    },
                    diferent:
                    {
                        field:"email",
                        message:"La clave no puede ser el Email"
                    }
                }
            },
            pasword2:
            {
                validators:
                {
                    notEmpty:
                    {
                     message:"Escribe una Clave"   
                    },
                    identical:
                    {
                        field:"pasword",
                        message:"Las claves no coinciden"
                    }
                }
            }
       }
    }).on('submit', function (e) 
    {
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            success: function(response)
            {
                console.log(response);
                if(response.estado=="true")
                {
                    $("body").overhang({
                    type: "success",
                    message: response.mensaje,
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
    
        e.preventDefault();
    })

});