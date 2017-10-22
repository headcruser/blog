$(document).ready(function() {
	$('#tbl_entradas').DataTable({
        "language":{
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords:"No se encontraron resultados en su busqueda",
            info:"Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty:"No existen registros",
            infoFiltered:"(filtrado de un total de _MAX_ registros)",
            search:"Buscar",
            paginate:{
                "first":"Primero",
                "last":"Ultimo",
                "next":"Siguiente",
                "previous":"Anterior"
            }
        }
    });
});