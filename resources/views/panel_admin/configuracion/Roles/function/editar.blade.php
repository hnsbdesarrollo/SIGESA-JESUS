<script>

$('body').on('click', '.editarRoles', function () {
    //alert("click");
    var IdRol = $(this).data('id');
    console.log(IdRol);
    $("#registrarRoles").attr("disabled",false);
    $.ajax({
    url:'{{url('roles_view/')}}/'+IdRol,
    type:'GET',
    dataType:'JSON',
        success: function(data){
            $('#IdRol').val(data[0].IdRol);
            $('#Nombre').val(data[0].Nombre);
        }
    })

});


</script>
