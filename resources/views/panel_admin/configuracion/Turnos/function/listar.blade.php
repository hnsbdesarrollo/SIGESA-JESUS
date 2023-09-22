
<script>

    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var tabla = $('#listaTurnos').DataTable({
        "processing": true,
        "serverSide": true,
        "resposive": true,
        "autoWidth": false,
        "info": true,
        "bLengthChange": true,
        "ajax": "{{ url('tipos_turnos') }}",
        "type": 'GET',
        "order": [[ 1, 'asc' ]],
        "columns": [
        {data: 'IdTurno',visible: false,searchable: false},
        {data: 'Codigo'},
        {data: 'Turno'},
        {data: 'HoraInicio'},
        {data: 'HoraFin'},
        {data: 'Especialidad'},
        {data: 'TipoServicio'},
        {data: 'TurnoReferencia'},
        {data: 'action', orderable: false},
        ],
        "pageLength": 10,
        "lengthMenu": [[10,20, 50, 100, 250, -1], [20, 50, 100, 250, "Todo"]],
        "language":{
          "emptyTable":     "No hay Turnos.",
          "info":           "Mostrando _START_ a _END_ de _TOTAL_ Turnos",
          "infoEmpty":      "Mostrando 0 a 0 de 0 Turnos",
          "lengthMenu":     "Mostrar  _MENU_  Turnos",
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
