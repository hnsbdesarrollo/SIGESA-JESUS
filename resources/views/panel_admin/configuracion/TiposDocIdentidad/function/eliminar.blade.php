<script>
    $('body').on('click', '.eliminarTiposDocIdentidad', function () {
    var IdDocIdentidad = $(this).data('id');
      swal({
        buttons: true,
        title: "¿Desea Eliminar el Registro Seleccionado?",
        text: "Recuerde que se eliminará el Registro Seleccionado :V.",
        icon: "warning",
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url:'{{url('tipos_documentos_identidad_destroy/')}}/'+IdDocIdentidad,
                type:'GET',
                dataType:'JSON',
                success: function(data){
                    if(data==1){
                         var oTable = $('#listaTiposDocIdentidad').dataTable();
                         oTable.fnDraw(false);

                         swal({
                            buttons: false,
                            title: "Eliminación Exitosa",
                            text: "El Registro fue Eliminado Correctamente.",
                            icon: "success",
                            timer: 1500,
                         });
                    }
                }
            })
        } else {

          swal({
            buttons: false,
            title: "Operación Cancelada",
            text: "Registro sin Cambios.",
            icon: "error",
            timer: 1500,
          });

        }
      });

    });

    </script>

