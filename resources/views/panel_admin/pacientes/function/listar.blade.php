
<script>

    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var tabla = $('#listaPacientes').DataTable({
        "processing": true,
        "serverSide": true,
        "resposive": true,
        "autoWidth": false,
        "info": true,
        "bLengthChange": true,
        "ajax": "{{ url('pacientes') }}",
        "type": 'GET',
        "order": [[ 2, 'asc' ]],
        "columns": [
        {data: 'IdPaciente',visible: false,searchable: false},
        {data: 'ApellidoPaterno'},
        {data: 'ApellidoMaterno'},
        {data: 'action', orderable: false},
        ],
        "pageLength": 20,
        "lengthMenu": [[20, 50, 100, 250, -1], [20, 50, 100, 250, "Todo"]],
        "language":{
          "emptyTable":     "No hay Empleados registradas.",
          "info":           "Mostrando _START_ a _END_ de _TOTAL_ Empleados",
          "infoEmpty":      "Mostrando 0 a 0 de 0 Empleados",
          "lengthMenu":     "Mostrar  _MENU_  Empleados",
          "loadingRecords": "Cargando...",
          "processing":     "Procesando...",
          "search":         "Buscar: ",
          "zeroRecords":    "Ningún dato coincide con la búsqueda.",
          "paginate": {
            "first":      "Primero",
            "last":       "Último",
            "next":       "Siguiente",
            "previous":   "Anterior"
          }
        }
      });

    });

    </script>
