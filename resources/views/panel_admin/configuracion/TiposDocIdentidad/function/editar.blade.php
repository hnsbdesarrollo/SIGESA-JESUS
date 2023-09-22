<script>

$('body').on('click', '.editarTiposDocIdentidad', function () {

    var IdDocIdentidad = $(this).data('id');
    $("#registrarTiposDocIdentidad").attr("disabled",false);
    $.ajax({
    url:'{{url('tipos_documentos_identidad_view/')}}/'+IdDocIdentidad,
    type:'GET',
    dataType:'JSON',
        success: function(data){
            $('#IdDocIdentidad').val(data[0].IdDocIdentidad);
            $('#DescripcionTiposDocIdentidad').val(data[0].Descripcion);
            $('#DescripcionAbrevTiposDocIdentidad').val(data[0].DescripcionAbrev);
            $('#LongitudTiposDocIdentidad').val(data[0].Longitud);
        }
    })

});


</script>
