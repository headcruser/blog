// //cargar primero los elementos de la página
//     function validar()
//     {



//         //Declaracion de variables
//         var nombre = document.getElementById("nombre"),
//             email = document.getElementById("email"),
//             pasword = document.getElementById("pasword"),
//             pasword2 = document.getElementById("pasword2");

//         if( nombre.value === "" || email.value === "" ||
//             pasword.value === "" ||pasword2.value === "" )
//         {
//             $("body").overhang(
//             {
//               type: "error",
//               message: "No has llenado los Campos"
//             });
            
//             return false;
//         }

//         if( nombre.value.length>25)
//         {
//             nombre.value = "";
//             nombre.className="form-control alert-danger inputError";

//             $("body").overhang(
//             {
//               type: "warn",
//               message: "El nombre es muy largo",
//               duration: 3
//             });

//             return false;
//         }

//         var comprobarInput = function(){
//         nombre.className = "form-control";
//         tareaInput.setAttribute("placeholder","Agrega tu tarea");

//         };

//         nombre.addEventListener("click",nombre);
       
//     }


//otra forma de validar

$("#registro").validate({
        
        rules:
        {
             nombre:"required",
             email:
             {
                required:true,
                email:true
             },
             pasword:"required",
             pasword2:"required"

        },
        messages:
        {
            nombre:"Escribe un nombre",
            email:
            {
                required:"Escribe un correo electrónico",
                email:"Correo no válido"
            },
            pasword:"Escribe una contraseña",
            pasword2:"Escribe escribir una contraseña"
        }
    });



$("#registro").submit(function(){
        
        if($("#nombre").val()=="")
        {
            $("body").overhang(
            {
              type: "error",
              message: "El campo nombre esta vacio"
            });

            $("#nombre").parent().attr("class","form-group has-error");
            $("#nombre").focus();

            return false;
        }
        });