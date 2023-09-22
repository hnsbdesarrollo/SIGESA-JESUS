<script>
    $('#crearRoles').click(function () {

        $('#IdRol').val('');
        $('#Nombre').val('');
        $("#Nombre").focus();
        $("#registrarRoles").attr("disabled",false);

    });

    $( "#registrarRoles" ).on( "click", function() {
      $(this).attr('disabled', true);
    });


    $(document).ready(function () {
      $('#registrarRoles').click(function (e) {
        e.preventDefault();
        var Nombre=$('#Nombre').val();
        //console.log(IdDocIdentidad);
        var token=$('#_token').val();
        var route='{{url('roles_save')}}';


        if(Nombre == '' ){

          swal({
            buttons: false,
            title: "Cuidado",
            text: "Los campos con (*), no pueden estar vacío, verifique su infromación.",
            icon: "warning",
            timer: 1500,
          });

          $("#Nombre").focus();
          $("#registrarRoles").attr("disabled",false);
          return;
        }


          var formData = new FormData($("#FormularioRoles") [0]);
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
                    $('#FormularioRoles').trigger("reset");
                    $('#modalRoles').modal('hide');
                    $("#registrarRoles").attr("disabled",true);

                    swal({
                        buttons: false,
                        title: "Registro Exitoso",
                        text: "El Registro fue Creado Correctamente.",
                        icon: "success",
                        timer: 1500,
                    });

                    var oTable = $('#listaRoles').dataTable();
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
