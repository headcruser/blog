$(document).ready(function()
{
    $("#registro").bootstrapValidator(
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
    });

});