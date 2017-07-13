//Funcion para confirmar la eliminacion de los elementos
function confirmar(url)
{
    $.confirm({
        theme: 'light',
        title: 'Eliminar',
        content: '¿Desea eliminar al usuario?',
        autoClose: 'cancelAction|15000',
        animation: 'zoom',
        buttons: 
        {
            deleteUser: 
            {
                btnClass: 'btn-danger',
                text: 'Eliminar',
                action: function () {
                    window.location.href=url;
                }
            },
            cancelAction:
            {
                btnClass: 'btn-info',
                text: 'Cancelar',
                action:function () {
                }
            }
        }
    });
}