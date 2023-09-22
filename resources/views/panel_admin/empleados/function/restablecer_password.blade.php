<script>

$('body').on('click', '.empleado_rest_pass', function () {
    var IdEmpleado = $(this).data('id');
    var DNI = $(this).data('dni').trim();
    console.log('---'+DNI+'---');

	swal({
		buttons: true,
		title: "¿Desea Restablecer la Contraseña del Empleado Seleccionado?",
		text: "Recuerde que se asignará como nueva contrasña, su número de documento.",
		icon: "warning",
		dangerMode: true,
	}).then((willDelete) => {
        $.ajax({
            url: '{{ url('empleado_restablecer_password') }}',
            type: 'POST',
            data: {
                IdEmpleado: IdEmpleado,
                DNI: DNI
            },
            dataType: 'JSON',
            success: function(data){

                swal({
                    buttons: false,
                    title: "Actualización Exitosa",
                    text: "El Empleado fue actualizado de forma exitosa. Recuerde que su clave el su número de documento",
                    icon: "success",
                    timer: 1500,
                });

                var oTable = $('#listaEmpelados').dataTable();
                oTable.fnDraw(false);

            }
        })
	});

});
</script>
