<script>
    $('#crearTiposDocIdentidad').click(function () {

        $('#IdDocIdentidad').val('');
        $('#DescripcionTiposDocIdentidad').val('');
        $('#DescripcionAbrevTiposDocIdentidad').val('');
        $('#LongitudTiposDocIdentidad').val('');
        $("#DescripcionTiposDocIdentidad").focus();
        $("#registrarTiposDocIdentidad").attr("disabled",false);

    });

    $( "#registrarTiposDocIdentidad" ).on( "click", function() {
      $(this).attr('disabled', true);
    });


    $(document).ready(function () {
      $('#registrarTiposDocIdentidad').click(function (e) {
        e.preventDefault();
        var DescripcionTiposDocIdentidad=$('#DescripcionTiposDocIdentidad').val();
        var LongitudTiposDocIdentidad=$('#LongitudTiposDocIdentidad').val();
        //console.log(IdDocIdentidad);
        var token=$('#_token').val();
        var route='{{url('tipos_documentos_identidad_save')}}';


        if(DescripcionTiposDocIdentidad == '' || LongitudTiposDocIdentidad == ''){

          swal({
            buttons: false,
            title: "Cuidado",
            text: "Los campos con (*), no pueden estar vacío, verifique su infromación.",
            icon: "warning",
            timer: 1500,
          });

          $("#DescripcionTiposDocIdentidad").focus();
          $("#registrarTiposDocIdentidad").attr("disabled",false);
          return;
        }


          var formData = new FormData($("#FormularioTiposDocIdentidad") [0]);
          $.ajax({
            data: formData,
            url:route,
            contentType: false,
            processData: false,
            headers: {'X-CSRF-TOKEN':token},
            type:'POST',
            enctype: 'multipart/form-data',
            dataType:'JSON',
            success: function(data){
                if(data!=null){
                    $('#FormularioTiposDocIdentidad').trigger("reset");
                    $('#modalTiposDocIdentidad').modal('hide');
                    $("#registrarTiposDocIdentidad").attr("disabled",true);

                    swal({
                        buttons: false,
                        title: "Registro Exitoso",
                        text: "El Registro fue Creado Correctamente.",
                        icon: "success",
                        timer: 1500,
                    });

                    var oTable = $('#listaTiposDocIdentidad').dataTable();
                    oTable.fnDraw(false);
                }else{

                    swal({
                        buttons: false,
                        title: "Registro Cancelado",
                        text: "El Registro no pudo ser Procesado.",
                        icon: "error",
                        timer: 1500,
                    });
                }
              }
            });

      });
    });



    </script>
